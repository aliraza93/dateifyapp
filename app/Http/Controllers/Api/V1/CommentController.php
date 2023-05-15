<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Post;
use App\Models\ReportComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'images' => 'nullable|array',
            'is_anonymous' => 'required|boolean',
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
            $comment->is_anonymous = $request->is_anonymous;
            $comment->user_id = auth()->id();
            $comment->parent_comment_id = $request->parent_comment_id;
            $comment->save();

            if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    $comment->addMedia($image)->toMediaCollection('comment_images');
                }
            }

            return $this->SuccessResponse($this->dataCreated, [
                'comment' => $comment
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    /**
     * React on the specified resource.
     */
    public function react(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "is_liked"  => "required|boolean",
            "comment_id"   => "required|integer"
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            // Autheticate user
            $comment_id    = $request->comment_id;
            $comment       = Comment::where('id', $comment_id)->first();
            if (!$comment) {
                return $this->ErrorResponse('No record found in our database. Please try again', null, null);
            }

            if ($comment->user_id == Auth::id()) {
                return $this->ErrorResponse('You can not like/dislike your own post', null, null);
            }

            $user = User::where('id', auth()->id())->first();

            // Check if record existis already
            $likeOldRecord = CommentLike::where(['user_id' => Auth::id(), 'comment_id' => $comment_id])->first();

            if ($likeOldRecord) {
                if ($likeOldRecord->is_liked == $request->is_liked) {
                    if ($likeOldRecord->is_liked == '' && $request->is_liked == 0) {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);
                    } else {
                        CommentLike::where(['user_id' => auth()->id(), 'comment_id' => $comment_id])
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
                    } else {
                        $likeOldRecord->update([
                            'is_liked' => 0
                        ]);
                    }

                    return $this->SuccessResponse($this->dataRetrieved, [
                        'likeRecord' => $likeOldRecord,
                    ]);
                }
            } else {
                $likeRecord = new CommentLike();
                $likeRecord->is_liked = $request->is_liked;
                $likeRecord->comment_id = $comment_id;
                $user->commentLikes()->save($likeRecord);

                return $this->SuccessResponse($this->dataRetrieved, [
                    'likeRecord' => $likeRecord,
                ]);
            }
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function report(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment_id'   => 'required|integer',
            'reason'    => 'required|string',
            'additional_note' => 'nullable|string'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $comment = Comment::find($request->comment_id);
            if (!$comment) {
                return $this->ErrorResponse('Invalid comment id provided. Please enter valid comment id.', null, null);
            }

            if ($comment->user_id == Auth::id()) {
                return $this->ErrorResponse('You can not report your comment.', null, null);
            }

            $reportComment = ReportComment::where(['user_id' => Auth::id(), 'comment_id' => $request->comment_id])->first();
            if ($reportComment) {
                return $this->ErrorResponse('You have already reported this comment.', null, [
                    'record' => $reportComment
                ]);
            }

            $report = new ReportComment();
            $report->comment_id = $request->comment_id;
            $report->reason = $request->reason;
            $report->additional_note = $request->additional_note;
            $report->user_id = Auth::id();
            $report->save();

            return $this->SuccessResponse('Comment reported successfully.', [
                'record' => $report
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function all_comments_list(Request $request)
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

        $groups = $user->groups()
            ->with([
                'comments' => function ($query) use ($blocked_user_ids) {
                    $query->where('comments.user_id', auth()->id());
                    $query->whereNotIn('comments.user_id', $blocked_user_ids);
                }
            ])
            ->latest()->paginate($limit);

        return $this->SuccessResponse($this->dataRetrieved, [
            'groups' => $groups
        ]);
    }
}
