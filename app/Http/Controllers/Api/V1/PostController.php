<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Group;
use App\Models\GroupPosts;
use App\Models\GroupUser;
use App\Models\Post;
use App\Models\ReportPost;
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
        $blocked_user_ids = $this->blockedUserIds();
        $deactivatedUsersIds = $this->deactivatedUserIds();
        $my_goup_ids = $user->groups()->pluck('groups.id')->toArray();

        // Get posts
        $posts =  Post::whereIn('group_id', $my_goup_ids)->whereNotIn('user_id', $blocked_user_ids)->whereNotIn('user_id', $deactivatedUsersIds)->with('user')->latest()->paginate($limit);

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
        $blocked_user_ids = $this->blockedUserIds();

        $deactivatedUsersIds = $this->deactivatedUserIds();

        // Get posts
        $posts = $group->posts()->whereNotIn('user_id', $blocked_user_ids)->whereNotIn('user_id', $deactivatedUsersIds)->with('user')->paginate($limit);

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

        $user = User::find(auth()->id());
        $limit = $request->limit ? $request->limit : 20;

        // Get blocked users ids
        $blocked_user_ids = $this->blockedUserIds();

        $deactivatedUsersIds = $this->deactivatedUserIds();

        $groups = $user->groups()
            ->with([
                'posts' => function ($query) use ($blocked_user_ids, $deactivatedUsersIds) {
                    $query->whereNotIn('user_id', $blocked_user_ids)->where('user_id', auth()->id())->whereNotIn('user_id', $deactivatedUsersIds)
                        ->with([
                            'comments.childrenComments' => function ($query) use ($blocked_user_ids, $deactivatedUsersIds) {
                                $query->whereNotIn('user_id', $blocked_user_ids);
                                $query->whereNotIn('user_id', $deactivatedUsersIds);
                            }
                        ]);
                }
            ])
            ->latest()->paginate($limit);
        return $this->SuccessResponse($this->dataRetrieved, [
            'groups' => $groups
        ]);
    }

    public function report(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id'   => 'required|integer',
            'reason'    => 'required|string',
            'additional_note' => 'nullable|string'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $deactivatedUsersIds = $this->deactivatedUserIds();
            $post = Post::find($request->post_id)->whereNotIn('user_id', $deactivatedUsersIds);
            if (!$post) {
                return $this->ErrorResponse('Invalid post id provided. Please enter valid post id.', null, null);
            }

            if ($post->user_id == Auth::id()) {
                return $this->ErrorResponse('You can not report your post.', null, null);
            }

            $reportPost = ReportPost::where(['user_id' => Auth::id(), 'post_id' => $request->post_id])->first();
            if ($reportPost) {
                return $this->ErrorResponse('You have already reported this post.', null, [
                    'record' => $reportPost
                ]);
            }

            $report = new ReportPost();
            $report->post_id = $request->post_id;
            $report->reason = $request->reason;
            $report->additional_note = $request->additional_note;
            $report->user_id = Auth::id();
            $report->save();

            return $this->SuccessResponse('Post reported successfully.', [
                'record' => $report
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
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
            if ($post) {
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

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $deactivatedUsersIds = $this->deactivatedUserIds();
            $blocked_user_ids = $this->blockedUserIds();
            $post = Post::where('id', $request->post_id)->whereNotIn('user_id', $deactivatedUsersIds)->first();
            if (!$post) {
                return $this->ErrorResponse('Invalid post id provided. Please enter valid post id.', null, null);
            }

            $post = Post::where('id', $request->post_id)->whereNotIn('user_id', $deactivatedUsersIds)->with('comments.childrenComments')
                ->with([
                    'comments.childrenComments' => function ($query) use ($blocked_user_ids, $deactivatedUsersIds) {
                        $query->whereNotIn('comments.user_id', $deactivatedUsersIds);
                        $query->whereNotIn('comments.user_id', $blocked_user_ids);
                        $query->whereNotIn('childrenComments.user_id', $deactivatedUsersIds);
                        $query->whereNotIn('childrenComments.user_id', $blocked_user_ids);
                    }
                ])->first();

            return $this->SuccessResponse($this->dataRetrieved, [
                'post' => $post
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
