<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;


class NotificationController extends ApiController
{

    public function notifications()
    {
        try {
            $user = Auth::user();
            $notifications = $user->notifications()->simplePaginate(20);
            $timezone =  $this->fetchTimeZone();
            $users_ids = $notifications->map(function ($q) {
                return $q->data['user_id'];
            });

            $users = User::whereIn('id', $users_ids)->get();
            foreach ($notifications as $notification) {
                $notification->time = $this->setTimezone($timezone, $notification->created_at)->format('g:i A');
                $notification->sent_at = $this->getTime($timezone, $notification->created_at, true);
                $notification->day = $this->getTime($timezone, $notification->created_at, false);
                $notification->time_miliseconds = $this->setTimezone($timezone, $notification->created_at)->valueOf();
                $notification->human_readable = $notification->created_at->diffForHumans();
                $notification->message = $notification['data']['message'];
                if (isset($notification['data']['post_id'])) {
                    $notification->post_id = $notification['data']['post_id'];
                } else {
                    $notification->post_id = null;
                }

                if (isset($notification['data']['group_id'])) {
                    $notification->group_id = $notification['data']['group_id'];
                } else {
                    $notification->group_id = null;
                }

                if (isset($notification['data']['group_name'])) {
                    $notification->group_name = $notification['data']['group_name'];
                } else {
                    $notification->group_name = null;
                }

                $notification->notification_type = $notification['data']['notification_type'];

                foreach ($users as  $user) {
                    if ($notification['data']['user_id'] == $user->id) {
                        $notification->user = $user;
                    }
                }
                $notification = Arr::except($notification, ['data', 'type', 'notifiable_type', 'read_at', 'created_at', 'updated_at', 'notifiable_id']);
            }

            if (count($notifications) == 0) {
                return $this->SuccessResponse('You have no Unread Notifications.', null);
            }
            return $this->SuccessResponse($this->dataRetrieved, [
                'notifications' => $notifications
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function readNotification(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id'       => 'required|string',
            ]);
            //Send failed response if request is not valid
            if ($validator->fails()) {
                return $this->ErrorResponse($this->validationError, $validator->errors(), null);
            }

            $user = Auth::user();

            foreach ($user->unreadNotifications as $notification) {
                if ($notification->id == $request->id) {
                    $notification->markAsRead();
                }
            }

            return $this->SuccessResponse('Read Succesfully.', null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function readNotifications()
    {
        try {
            $user = Auth::user();
            $user->unreadNotifications->markAsRead();
            return $this->SuccessResponse('Read Succesfully.', null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function deleteNotification(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required|string',
            ]);

            //Send failed response if request is not valid
            if ($validator->fails()) {
                return $this->ErrorResponse($this->validationError, $validator->errors(), null);
            }
            $user = User::find(Auth::id());
            $user->notifications()->where('id', $request->id) // and/or ->where('type', $notificationType)
                ->get()
                ->first()
                ->delete();

            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function testPushNotification(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);
        if ($user) {
            $firebaseToken = User::whereNotNull('device_token')->where('id', $user->id)->pluck('device_token')->all();
            if (!$firebaseToken) {
                return $this->ErrorResponse('Device token is not stored for this user.', null, null);
            }
            $SERVER_API_KEY = 'AAAA3552Pik:APA91bEY34MscdqW8DRkjVrTU3auVwTnfbzBWDjWrKpUVAAEGmsLCsops6kCitbaIF3_6ypo_mph8HXKdIuGkDQm5B8Mr1ySb3oSi8eEbjjLJq53PqRdCndT6RvL7qAieOOHm1pLMMLL';

            $user = User::where('id', auth()->id())
                ->first();
            $sound = 'notification.wav';
            $image = null;
            $title = 'Dateify';
            $body = 'Received push notification successfully!';
            $data = [
                "registration_ids" => $firebaseToken,
                "image" => $image,
                "icon" => $image,
                "notification" => [
                    "title" => $title,
                    "body" => $body,
                    "badge" => 20,
                    "sound" => $sound,
                    "soundName" => $sound,
                    "image" => $image,
                    "icon" => $image,
                ],
                "apns" => [
                    "payload" => [
                        "aps" => [
                            "mutable-content" => 1,
                            "image" => $image,
                            "icon" => $image,
                        ],
                        "image" => $image,
                        "icon" => $image,
                    ],
                    "fcm_options" => [
                        "image" => $image,
                        "icon" => $image,
                    ]
                ],
                "android" => [
                    "notification" => [
                        "image" => $image,
                        "icon" => $image,
                    ]
                ],

                "data" => [
                    'type' => 'react-comment',
                    'user' => $user,
                    "image" => $image,
                    "icon" => $image,

                ],
            ];

            $dataString = json_encode($data);
            $headers = [
                'Authorization: key=' . $SERVER_API_KEY,
                'Content-Type: application/json',
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
            $response = curl_exec($ch);
            return $this->SuccessResponse('Notification sent successfully!', $response);
        } else {
            return "Enter valid user id";
        }
    }
}
