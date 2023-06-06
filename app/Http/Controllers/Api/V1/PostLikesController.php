<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\PostReactCounts;
use App\Events\ReactPost;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\User;
use App\Notifications\UserNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostLikesController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "is_liked"  => "required|boolean",
            "post_id"   => "required|integer"
        ]);

        if ($validator->fails()) {
            return $this->ErrorRespon´se($this->validationError, $validator->errors(), null);
        }

        try {
            // Autheticate user
            $post_id    = $request->post_id;
            $post       = Post::where('id', $post_id)->first();
            if (!$post) {
                return $this->ErrorResponse('No record found in our database. Please try again', null, null);
            }

            if ($post->user_id == Auth::id()) {
                return $this->ErrorResponse('You can not like/dislike your own post', null, null);
            }

            $user = User::where('id', auth()->id())->first();
            $post = Post::find($request->post_id);
            $post_owner = User::find($post->user_id);

            // Check if record existis already
            $likeOldRecord = PostLike::where(['user_id' => Auth::id(), 'post_id' => $post_id])->first();

            if ($likeOldRecord) {
                if ($likeOldRecord->is_liked == $request->is_liked) {
                    if ($likeOldRecord->is_liked == '' && $request->is_liked == 0) {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);
                        broadcast(new ReactPost($post, $user, $request->is_liked, $post->group_id))->toOthers();
                        // $post_owner->notify(new UserNotify($user, 'React on your post', 'post_reaction' ));
                    } else {
                        PostLike::where(['user_id' => auth()->id(), 'post_id' => $post_id])
                            ->update([
                                'is_liked' => NULL
                            ]);

                        broadcast(new ReactPost($post, $user, $request->is_liked, $post->group_id))->toOthers();

                        $likes_count = PostLike::where(['is_liked' => 1, 'post_id' => $post_id])->count();
                        $dislikes_count = PostLike::where(['is_liked' => 0, 'post_id' => $post_id])->count();
                        $total_reacts = PostLike::where('post_id', $post_id)->count();
                        $comments_count = $post->comments->count();
                        broadcast(new PostReactCounts($post, $user, $likes_count, $dislikes_count, $total_reacts, $comments_count, $post->group_id))->toOthers();
                        return $this->SuccessResponse($this->dataDeleted, null);
                    }
                } else {
                    if ($request->is_liked) {
                        $likeOldRecord->update([
                            'is_liked' => 1

                        ]);
                        broadcast(new ReactPost($post, $user, $request->is_liked, $post->group_id))->toOthers();
                        // $post_owner->notify(new UserNotify($user, 'React on your post', 'post_reaction' ));
                        // Get sender avatar
                        // broadcast(new ReactPost($post, $user, $request->is_liked))->toOthers();
                        // $post_owner->notify(new UserNotify($user, 'React on your post', 'post_reaction' ));
                    } else {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);

                        broadcast(new ReactPost($post, $user, $request->is_liked, $post->group_id))->toOthers();
                        // $post_owner->notify(new UserNotify($user, 'React on your post', 'post_reaction' ));
                    }
                    if ($request->is_liked) {
                        $this->sendPushNotification($post_owner, 'New Post React', $user->name . ' liked your post!',  $user->avatar, 'react_post', $user->id);
                    }
                    $likes_count = PostLike::where(['is_liked' => 1, 'post_id' => $post_id])->count();
                    $dislikes_count = PostLike::where(['is_liked' => 0, 'post_id' => $post_id])->count();
                    $total_reacts = PostLike::where('post_id', $post_id)->count();
                    $comments_count = $post->comments->count();
                    broadcast(new PostReactCounts($post, $user, $likes_count, $dislikes_count, $total_reacts, $comments_count, $post->group_id))->toOthers();


                    return $this->SuccessResponse($this->dataRetrieved, [
                        'likeRecord' => $likeOldRecord,
                    ]);
                }
            } else {
                $likeRecord = new PostLike();
                $likeRecord->is_liked = $request->is_liked;
                $likeRecord->post_id = $post_id;
                $user->postLikes()->save($likeRecord);
                broadcast(new ReactPost($post, $user, $request->is_liked, $post->group_id))->toOthers();
                if ($post_owner->notificationSettings != null && $post_owner->notificationSettings->in_app_notifications && $post_owner->notificationSettings->posts_notifications) {
                    $post_owner->notify(new UserNotify($user, 'reacted on your post', 'post_reaction', $post_id, $post->group_id));
                }

                $likes_count = PostLike::where(['is_liked' => 1, 'post_id' => $post_id])->count();
                $dislikes_count = PostLike::where(['is_liked' => 0, 'post_id' => $post_id])->count();
                $total_reacts = PostLike::where('post_id', $post_id)->count();
                $comments_count = $post->comments->count();
                broadcast(new PostReactCounts($post, $user, $likes_count, $dislikes_count, $total_reacts, $comments_count, $post->group_id))->toOthers();
                if ($request->is_liked) {
                    $this->sendPushNotification($post_owner, 'New Post React', $user->name . ' liked your post!',  $user->avatar, 'react_post', $user->id);
                }
                return $this->SuccessResponse($this->dataRetrieved, [
                    'likeRecord' => $likeRecord,
                ]);
            }
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
