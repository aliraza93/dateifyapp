<?php

namespace App\Events;

use App\Models\Comment as ModelsComment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Comment implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $post;
    public $comment;
    public $parent_comment_id;
    public $user;
    public function __construct(Post $post, ModelsComment $comment, $parent_comment_id, User $user)
    {
        $this->post = $post;
        $this->comment = $comment;
        $this->parent_comment_id = $parent_comment_id;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new PrivateChannel('post.' . $this->post->id );
    }
}
