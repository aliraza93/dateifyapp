<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupPosts;
use App\Models\GroupUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

class PostController extends ApiController
{
    public function new_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'is_flag'                   => 'required|boolean',
            'is_anonymous'              => 'required|boolean',
            'flag_description'          => 'nullable',
            'flag_icons'                => 'nullable',
            'description'               => 'nullable',
            'group_id'                  => 'required',
            
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }
        
        try {
            
            $user = User::find(auth()->id());
            
            if (!$user) {
                return $this->ErrorResponse('No user record found in our database. Please try again', null, null);
            }

            $group = GroupUser::where('group_id', $request->group_id)->where('user_id', $user->id)->first();
            if (!$group) {
                return $this->ErrorResponse('No group record found in our database. Please try again', null, null);
            }
            
            $newpost = new Post();
            $newpost->is_flag = $request->is_flag;                   
            $newpost->is_anonymous = $request->is_anonymous;              
            $newpost->flag_description = $request->flag_description;          
            $newpost->flag_icons = $request->flag_icons;                
            $newpost->description = $request->description;          
            $newpost->group_id = $request->group_id;   
            $newpost->user_id  = $user->id;
            $newpost->save();  
            if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    $newpost->addMedia($image)->toMediaCollection('post_image');
                }             
            }
            return $this->SuccessResponse('Added Succesfully.', null);
            
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function group_posts_list(Request $request) {
        $validator = Validator::make($request->all(), [
            'group_id'                  => 'required',
            
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }
        
        $group = Group::find( $request->group_id)->posts;
            if (!$group) {
                return $this->ErrorResponse('No group record found in our database. Please try again', null, null);
            }
            $data = new Paginator($group, 20);
            $data = $data->setPath(url()->current());
        return $this->SuccessResponse($this->dataRetrieved, [
                'posts' => $data
            ]);
        
    }
}
