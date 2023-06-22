<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\GroupUse;

class GroupController extends ApiController
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:groups',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('name', $request->name)->first();

            if ($group) {
                return $this->ErrorResponse('Group with this name already exists!', null, null);
            }

            $newGroup = new Group();
            $newGroup->name = $request->name;
            $newGroup->save();
            $image = $request->file('image');
            if ($image) {
                $newGroup->addMedia($image)->toMediaCollection('group_images');
            }
            return $this->SuccessResponse('Added Succesfully.', [
                'group' => $newGroup
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
    public function add_testing_group(){
        
    }

    public function addParticipant(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group_validate = Group::find($request->group_id);

            if (!$group_validate) {
                return $this->ErrorResponse('Group not found', null, null);
            }

            $group = GroupUser::where('group_id', $request->group_id)->where('user_id', auth()->id())->first();
            if ($group) {
                return $this->ErrorResponse('User is already added in this group!', null, null);
            }

            $newUser = new GroupUser();
            $newUser->group_id = $request->group_id;
            $newUser->user_id = auth()->id();
            $newUser->save();
            return $this->SuccessResponse('Added Succesfully.', [
                'groupUser' => $newUser
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $limit = $request->limit ? $request->limit : 20;
            $user = User::find(auth()->id());
            $groups = $user->groups()->paginate($limit);
            return $this->SuccessResponse($this->dataRetrieved, [
                'groups' => $groups
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit'         => 'nullable|numeric',
            'is_global'     => 'nullable|boolean',
            'name'          => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $deactivatedUsersIds = $this->deactivatedUserIds();
            $limit = $request->limit ? $request->limit : 20;

            $isGlobal = $request->is_global;
            $searchTerm = $request->name;

            $groupsQuery = Group::query();

            if ($isGlobal) {
                // Search all groups by name
                $groupsQuery->where('name', 'LIKE', '%' . $searchTerm . '%');
            } else {
                // Search within joined groups by name
                $groupsQuery->where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->whereHas('users', function ($query) use ($deactivatedUsersIds) {
                        $query->where('users.id', auth()->id());
                        $query->whereNotIn('users.id', $deactivatedUsersIds);
                    });
            }

            // Add a subquery to order the results by joined groups on top and unjoined groups at the bottom
            $groupsQuery->orderByRaw('(SELECT COUNT(*) FROM group_users WHERE group_users.group_id = groups.id AND group_users.user_id = ' . auth()->id() . ') DESC');

            $groups = $groupsQuery->paginate($limit);

            // If the number of retrieved records is less than the limit and the search is not global,
            // search within unjoined groups to complete the remaining records
            if ($groups->count() < $limit && !$isGlobal) {
                $unjoinedGroupsQuery = Group::where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->whereDoesntHave('users', function ($query) use ($deactivatedUsersIds) {
                        $query->where('users.id', auth()->id());
                        $query->whereNotIn('users.id', $deactivatedUsersIds);
                    })
                    ->orderBy('created_at', 'desc')
                    ->take($limit - $groups->count())
                    ->paginate($limit - $groups->count());

                $groups = $groups->concat($unjoinedGroupsQuery);
            }

            return $this->SuccessResponse($this->dataRetrieved, [
                'groups' => $groups
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function leave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('id', $request->group_id)->first();
            if (!$group) {
                return $this->ErrorResponse('Group not found!', null, null);
            }

            $groupUser = GroupUser::where('group_id', $request->group_id)->where('user_id', auth()->id())->first();
            if (!$groupUser) {
                return $this->ErrorResponse('User is not added in this group!', null, null);
            }

            $user = User::find(auth()->id());
            $user->groups()->detach($request->group_id);
            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // Delete group
    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('id', $request->group_id)->first();
            if (!$group) {
                return $this->ErrorResponse('Group not found!', null, null);
            }
            // Delete GroupUsers
            $group->users()->detach();

            // Delete Posts and associated Comments
            $group->posts()->each(function ($post) {
                $post->comments()->delete();
                $post->delete();
            });

            // Delete Group and associated media
            $group->delete();

            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function destroy_web($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->back()->with('success', 'Group deleted successfully.');
    }

    public function edit_web($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.edit', compact('group'));
    }

    public function update_web(Request $request, $id)
    {
        $group = Group::findOrFail($id);

        $group->name = $request->input('name');
        $group->state = $request->input('state');
        $group->save();
        $url = $request->input('url');
        // Update other properties as needed
        if($url != null) {
            $group->addMediaFromUrl($url)->toMediaCollection('group_images');

        }


        return redirect()->back()->with('success', 'Group updated successfully.');
    }

}
