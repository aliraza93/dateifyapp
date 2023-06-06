<?php

namespace App\Events;

use App\Models\Post;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostReactCounts implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $post;
    public $likes_count;
    public $dislikes_count;
    public $total_reacts;
    public $user;
    public $comments_count;
    /**
     * Create a new event instance.
     */
    public function __construct(Post $post, User $user, $likes_count, $dislikes_count, $total_reacts, $comments_count)
    {
        $this->post = $post;
        $this->user = $user;
        $this->likes_count = $likes_count;
        $this->dislikes_count = $dislikes_count;
        $this->total_reacts = $total_reacts;
        $this->comments_count = $comments_count;
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