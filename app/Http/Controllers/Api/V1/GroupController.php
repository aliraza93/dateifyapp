<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\GroupUse;

class GroupController extends ApiController
{
    public function new_group(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                   => 'required|string'            
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }
        
        try {
            
            $group = Group::where('name', $request->name)->first();
            if ($group) {
                return $this->ErrorResponse('Already exhist this name group', null, null);
            }
            
            $newpost = new Group();
            $newpost->name = $request->name;                   
            $newpost->save();               
            return $this->SuccessResponse('Added Succesfully.', null);
            
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function add_participents(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id'                   => 'required',            
            'user_id'                   => 'required'            
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }
        
        try {
            
            $group = GroupUser::where('group_id', $request->group_id)->where('user_id', $request->user_id)->first();
            if ($group) {
                return $this->ErrorResponse('Already exhist', null, null);
            }
            
            $newUser = new GroupUser();
            $newUser->group_id = $request->group_id;                   
            $newUser->user_id = $request->user_id;                   
            $newUser->save();               
            return $this->SuccessResponse('Added Succesfully.', null);
            
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

     
}   
