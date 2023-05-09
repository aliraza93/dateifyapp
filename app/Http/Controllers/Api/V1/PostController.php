<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentLike;
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
    // Show all posts
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        $user = User::find(auth()->id());
        $limit = $request->limit ? $request->limit : 20;

        // Get blocked users ids
        $block_user_ids = $this->blockedUserIds();
        $my_goup_ids = $user->groups()->pluck('groups.id')->toArray();
        
        // Get posts
        $posts =  Post::where('group_id', $my_goup_ids)->whereNotIn('user_id', $block_user_ids)->with('user')->latest()->paginate($limit);

        // $data = new Paginator($group, 20);
        // $data = $data->setPath(url()->current());
        return $this->SuccessResponse($this->dataRetrieved, [
            'posts' => $posts
        ]);
    }

    // Add new post
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'is_flag'           => 'required|boolean',
            'is_anonymous'      => 'required|boolean',
            'flag_description'  => 'nullable',
            'flag_count'        => 'nullable',
            'description'       => 'nullable',
            'group_id'          => 'required',

        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $user = User::find(auth()->id());

            if (!$user) {
                return $this->ErrorResponse('No user record found in our database. Please try again', null, null);
            }

            $group = Group::where('id', $request->group_id)->first();
            if (!$group) {
                return $this->ErrorResponse('No group found. Please try again', null, null);
            }

            $groupUser = GroupUser::where('group_id', $request->group_id)->where('user_id', $user->id)->first();
            if (!$groupUser) {
                return $this->ErrorResponse('You are not a participant of this group. Please try again', null, null);
            }

            $newpost = new Post();
            $newpost->is_flag = $request->is_flag;
            $newpost->is_anonymous = $request->is_anonymous;
            $newpost->flag_description = $request->flag_description;
            $newpost->flag_count = $request->flag_count;
            $newpost->description = $request->description;
            $newpost->group_id = $request->group_id;
            $newpost->user_id  = $user->id;
            $newpost->save();
            if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    $newpost->addMedia($image)->toMediaCollection('post_images');
                }
            }
            return $this->SuccessResponse('Added Succesfully.', [
                'post' => $newpost
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'is_flag'           => 'required|boolean',
            'is_anonymous'      => 'required|boolean',
            'flag_description'  => 'nullable',
            'flag_count'        => 'nullable',
            'description'       => 'nullable',
            'group_id'          => 'required',
            'post_id'          => 'required',

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

            $post =  Post::find($request->post_id);
            if (!$post) {
                return $this->ErrorResponse('No user record found in our database. Please try again', null, null);
            }

            $post->is_flag = $request->is_flag;
            $post->is_anonymous = $request->is_anonymous;
            $post->flag_description = $request->flag_description;
            $post->flag_count = $request->flag_count;
            $post->description = $request->description;
            $post->save();

            if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    $post->addMedia($image)->toMediaCollection('post_images');
                }
            }
            return $this->SuccessResponse('Added Succesfully.', [
                'post' => $post
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required',
            'limit' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        $group = Group::find($request->group_id);
        if (!$group) {
            return $this->ErrorResponse('No group record found in our database. Please try again', null, null);
        }

        $limit = $request->limit ? $request->limit : 20;

        // Get blocked users ids
        $block_user_ids = $this->blockedUserIds();

        // Get posts
        $posts = $group->posts()->whereNotIn('user_id', $block_user_ids)->with('user')->paginate($limit);

        // $data = new Paginator($group, 20);
        // $data = $data->setPath(url()->current());
        return $this->SuccessResponse($this->dataRetrieved, [
            'posts' => $posts
        ]);
    }

    public function all_posts_list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        $limit = $request->limit ? $request->limit : 20;

        // Get blocked users ids
        $block_user_ids = $this->blockedUserIds();
        
        // Get posts
        $posts = Post::with(['user', 'comments'])->whereNotIn('user_id', $block_user_ids)->where('user_id', auth()->id())->latest()->paginate($limit);

        // $data = new Paginator($group, 20);
        // $data = $data->setPath(url()->current());
        return $this->SuccessResponse($this->dataRetrieved, [
            'posts' => $posts
        ]);
    }

    public function destroy(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $post = Post::where('id', $request->post_id)->first();
            if($post){
                Comment::where('post_id', $request->post_id)->delete();
                $post->clearMediaCollection('post_images');
                $post->delete();
            } else {
                return $this->ErrorResponse('No record found', null, null);
            }
            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    
}
