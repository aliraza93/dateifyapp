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
            'name' => 'required|string',
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
            
            if(!$group_validate){
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

    public function search_group(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit'         => 'nullable|numeric',
            'is_global'     =>   'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $limit = $request->limit ? $request->limit : 20;
            $user = User::find(auth()->id());
            
            if($request->filled('is_global')) {

            }
            $groups = $user->groups()->paginate($limit);
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
}
