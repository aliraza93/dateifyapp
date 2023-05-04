<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlockUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends ApiController
{
    // Get logged in user's details
    public function show()
    {
        try {
            // Autheticate user
            $user  = User::find(auth()->id());
            if (!$user) {
                return $this->ErrorResponse('No user found in our database. Please try again', null, null);
            }
            $user = User::where('id', auth()->id())->first()->append('images');
            
            return $this->SuccessResponse($this->dataRetrieved, [
                'user' => $user,
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // Block any user
    public function block(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $user = User::find($request->user_id);
            if (!$user) {
                return $this->ErrorResponse('Invalid user id provided. Please enter valid user id.', null, null);
            }

            if ($user->id == Auth::id()) {
                return $this->ErrorResponse('You can not block yourself.', null, null);
            }
            
            // Check if already blocked
            $blockRecord = BlockUser::where('user_id', Auth::id())->where('blocked_user_id', $request->user_id)->first();
            if ($blockRecord) {
                return $this->ErrorResponse('You already have blocked this user.', null, null);
            }

            $blockUser = new BlockUser();
            $blockUser->blocked_user_id = $request->user_id;
            $blockUser->user_id = Auth::id();
            $blockUser->save();

            return $this->SuccessResponse('User blocked successfully.', [
                'record' => $blockUser
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // Get My Block List
    public function myBlockedList()
    {
        $blockList = BlockUser::where(['user_id' => Auth::id()])->get();

        if (count($blockList) == 0) {
            return $this->ErrorResponse('No users blocked.', null, null);
        }

        try {
            $blocked_user_ids = $blockList->map(function ($q) {
                return $q->blocked_user_id;
            });

            // Get blocked at arribute
            $blocked_at = $blockList->map(function ($q) {
                return $q->created_at;
            });

            $users = User::whereIn('id', $blocked_user_ids);
            $users = $users->simplePaginate(20);

            if (count($users) > 0) {
                // Add blocked at attribute in users collection
                foreach ($users as $key => $user) {
                    $user->blocked_at = $blocked_at[$key];
                }
            }

            return $this->SuccessResponse($this->dataRetrieved, [
                'blockList' => $users
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // UnBlock any user
    public function unblock(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $user = User::find($request->user_id);
            if (!$user) {
                return $this->ErrorResponse('Invalid user id provided. Please enter valid user id.', null, null);
            }

            if ($user->id == Auth::id()) {
                return $this->ErrorResponse('You can not block/unblock yourself.', null, null);
            }

            $blockUser = BlockUser::where(['user_id' => Auth::id(), 'blocked_user_id' => $request->user_id])->first();
            if (!$blockUser) {
                return $this->ErrorResponse('You have not blocked this user.', null, null);
            } else {
                $blockUser->delete();
                return $this->SuccessResponse('User unblocked successfully.', null);
            }
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
