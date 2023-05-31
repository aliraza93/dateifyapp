<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlockUser;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\GroupUser;
use App\Models\Post;
use App\Models\ReportComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Seshac\Otp\Models\Otp;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'nullable|string',
            'username'  => 'nullable|string',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $user = User::find(Auth::id());
            // Check if request has name

            if ($request->name) {
                $user->name = $request->name;
            }

            if ($request->username) {
                $old_username = User::where('username', $request->username)->first();
                if ($old_username) {
                    $suggestions = $this->generateUsernameSuggestions($request->username); // Generate 3 different username suggestions
                    return $this->ErrorResponse('Username already taken please choose a unique Username', $suggestions, null);
                } else {
                    $user->username = $request->username;
                }
            }

            $user->save();

            $file = $request->file('image');

            if ($file) {
                $user->clearMediaCollection('profile_images');
                $user->addMedia($file)->toMediaCollection('profile_images');
            }

            return $this->SuccessResponse(
                $this->dataUpdated,
                [
                    'user' => $user
                ]
            );
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

    public function deleteAccount()
    {
        try {
            $user = User::find(Auth::id());

            DB::table('otps')->where('identifier', $user->phone)->delete();
            DB::table('media')->where('model_id', $user->id)->delete();
            DB::table('group_users')->where('user_id', $user->id)->delete();
            DB::table('posts')->where('user_id', $user->id)->delete();
            DB::table('post_likes')->where('user_id', $user->id)->delete();
            DB::table('report_posts')->where('user_id', $user->id)->delete();
            DB::table('comments')->where('user_id', $user->id)->delete();
            DB::table('comment_likes')->where('user_id', $user->id)->delete();
            DB::table('report_comments')->where('user_id', $user->id)->delete();
            DB::table('block_users')->where('blocked_user_id', $user->id)->delete();
            DB::table('block_users')->where('user_id', $user->id)->delete();
            DB::table('contact_us')->where('user_id', $user->id)->delete();
            $user->tokens()->delete();
            // $user->notifications()->delete();

            // DB::table('notifications')
            //     ->whereRaw("JSON_EXTRACT(`data`, '$.user_id') = ?", $user_id)->delete();
            // $user->clearMediaCollection('profile_images');
            $user->delete();
            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function deactivateAccount(Request $request)
    {
        try {

            $user = User::find(auth()->id());
            if (!$user) {
                return $this->ErrorResponse('Invalid user id provided. Please enter valid user id.', null, null);
            }

            $user->is_deactivated = true;
            $user->save();

            return $this->SuccessResponse('User deactivated successfully.', [
                'record' => $user
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function updateDeviceToken(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'device_token' => 'required|string',
            ]);
            
            //Send failed response if request is not valid
            if ($validator->fails()) {
                return $this->ErrorResponse($this->validationError, $validator->errors(), null);
            }
            
            $user = User::find(Auth::id());
            $user->device_token = $request->device_token;
            $user->update();
            return $this->SuccessResponse($this->dataUpdated, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
