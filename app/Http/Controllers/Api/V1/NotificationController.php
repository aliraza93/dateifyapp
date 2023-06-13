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
            $image = 'data:image/jpeg;base64,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';
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
