<?php

namespace App\Notifications;

use App\Models\Group;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
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
    public $post_id;
    public $created_at;
    public $group;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, $message, $notification_type, $post_id, Group $group)
    {
        $this->user = $user;
        $this->message = $message;
        $this->notification_type = $notification_type;
        $this->post_id = $post_id;
        $this->created_at = Carbon::now();
        $this->group = $group;
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
            'post_id' => $this->post_id,
            'group_id' => $this->group->id,
            'group_name' => $this->group->name,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toBroadcast($notifiable)
    {
        $timezone =  $this->fetchTimeZone();
        return new BroadcastMessage([
            'message' => $this->message,
            'human_readable' => $this->created_at->diffForHumans(),
            'time'          => $this->setTimezone($timezone, $this->created_at)->format('g:i A'),
            'sent_at'       => $this->getTime($timezone, $this->created_at, true),
            'time_miliseconds' => $this->setTimezone($timezone, $this->created_at)->valueOf(),
            'notification_type' => $this->notification_type,
            'user' => $this->user,
            'post_id' => $this->post_id,
            'group_id' => $this->group->id,
            'group_name' => $this->group->name,
        ]);
    }

    /*
    #####################################
    #
    #   Fetch and return Set Time Zone 
    #   Return Day 
    #
    ####################################
    */
    public function fetchTimeZone()
    {
        //Get current Ip and Update Time According to it
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if ($ip == '127.0.0.1') {
            $request = new Request();
            $ip = $request->ip;
        }

        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        return $ipInfo->timezone;
    }
    public function setTimezone($timezone, $created_at)
    {
        $time = Carbon::parse($created_at)->setTimezone($timezone);
        return $time;
    }

    public function getTime($timezone, $created_at, $value)
    {

        $current_meesage_date_time = Carbon::parse($created_at)->setTimezone($timezone);
        if (Carbon::now()->setTimezone($timezone)->subDays(7) <= $current_meesage_date_time) {
            if ($current_meesage_date_time->isToday()) {
                if ($value) {
                    return  $current_meesage_date_time->format('g:i A');
                } else {
                    return  'Today';
                }
            }

            // Check if message is sent yesterday
            elseif ($current_meesage_date_time->isYesterday()) {
                return 'Yesterday';
            }

            // Check if messages is sent before yesterday
            else {
                return $current_meesage_date_time->format('l');
            }
        } else {
            return  $current_meesage_date_time->format('d/m/Y');
        }
    }
}
