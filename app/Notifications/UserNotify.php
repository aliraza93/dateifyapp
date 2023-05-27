<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotify extends Notification
{
    use Queueable;
    public $user;
    public $message;
    public $notification_type;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, $message, $notification_type)
    {
     $this->user = $user;
     $this->message = $message;
     $this->notification_type = $notification_type;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    
    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->message,
            'notification_type' => 'new_like',
            'user_id' =>     $this->user->id,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => $this->message,
            'notification_type' => $this->notification_type,
            'user' => $this->user,

        ]);
    }
}
