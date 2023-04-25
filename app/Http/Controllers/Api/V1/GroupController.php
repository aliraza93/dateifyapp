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
                'posts' => $groups
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
