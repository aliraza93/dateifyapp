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
                $notification->notification_type = $notification['data']['notification_type'];

                foreach ($users as  $user) {
                    if ($notification['data']['user_id'] == $user->id) {
                        $notification->user = $user;
                    }
                }
                $notification = Arr::except($notification, ['data', 'type', 'notifiable_type', 'read_at', 'created_at', 'updated_at', 'notifiable_id']);
            }

            if (count($notifications) == 0) {
                return $this->ErrorResponse('You have no Unread Notifications.', null, null);
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
}
