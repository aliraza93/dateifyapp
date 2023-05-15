<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\ReactPost;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\User;
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
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
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

            // Check if record existis already
            $likeOldRecord = PostLike::where(['user_id' => Auth::id(), 'post_id' => $post_id])->first();

            if ($likeOldRecord) {
                if ($likeOldRecord->is_liked == $request->is_liked) {
                    if ($likeOldRecord->is_liked == '' && $request->is_liked == 0) {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);
                    } else {
                        PostLike::where(['user_id' => auth()->id(), 'post_id' => $post_id])
                            ->update([
                                'is_liked' => NULL
                            ]);

                        return $this->SuccessResponse($this->dataDeleted, null);
                    }
                } else {
                    if ($request->is_liked) {
                        $likeOldRecord->update([
                            'is_liked' => 1
                            
                        ]);
                        // Get sender avatar
                        $userPhoto = null;
                        $userPhoto = $user->getFirstMediaUrl('profile_images', 'avatar');
                        // broadcast(new ReactPost($likeOldRecord, $likesCounter, $userPhoto))->toOthers();
                    } else {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);
                        // Get sender avatar
                        $userPhoto = null;
                        // $userPhoto = $user2->getFirstMediaUrl('profile_images', 'avatar');
                        // broadcast(new ReactPost($request->user_id, $likesCounter, $userPhoto))->toOthers();
                    }

                    return $this->SuccessResponse($this->dataRetrieved, [
                        'likeRecord' => $likeOldRecord,
                    ]);
                }
            } else {
                $likeRecord = new PostLike();
                $likeRecord->is_liked = $request->is_liked;
                $likeRecord->post_id = $post_id;
                $user->postLikes()->save($likeRecord);
                
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
