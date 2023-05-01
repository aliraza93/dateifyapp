<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $post = Post::where('id', $request->post_id)->first();
            if (!$post) {
                return $this->ErrorResponse('No post record found in our database. Please try again', null, null);
            }

            $comments = Comment::where('post_id', $request->post_id)
            ->with(['user', 'childrenComments.user'])
            ->whereNull('parent_comment_id')
            ->get();

            return $this->SuccessResponse($this->dataCreated, [
                'comments' => $comments
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
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
            'body' => 'required',
            'parent_comment_id' => 'nullable|exists:comments,id',
            'post_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $post = Post::where('id', $request->post_id)->first();
            if (!$post) {
                return $this->ErrorResponse('No post record found in our database. Please try again', null, null);
            }

            $comment = new Comment();
            $comment->body = $request->body;
            $comment->post_id = $post->id;
            $comment->user_id = auth()->id();
            $comment->parent_comment_id = $request->parent_comment_id;
            $comment->save();

            return $this->SuccessResponse($this->dataCreated, [
                'comment' => $comment
            ]);
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
