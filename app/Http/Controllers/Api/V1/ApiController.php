<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlockUser;
use App\Models\User;
use App\Models\UserNotificationSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class ApiController extends Controller
{
    public $dataRetrieved       = "Data Retrieved Successfully";
    public $dataCreated         = "Data Created Successfully";
    public $dataUpdated         = "Updated Successfully";
    public $dataDeleted         = "Deleted Successfully";
    public $dataNotRetrieved    = "Data Not Retrieved Successfully";
    public $noRecord            = "No Record";
    public $userNotLoggedIn     = "User is not logged in";
    public $requestValidated    = "Data Validated Successfully";
    public $requestNotValidated = "Data Could Not Be Validated";
    public $jsonException       = "Something went wrong on the server";
    public $validationError     = "You have entered an invalid data. Try again";
    public $blurred_image       = 'https://kiriproduction.s3.amazonaws.com/images/blur.jpeg';
    public $share_url           = 'https://kiridating.com/profile/d/user_id/';

    protected function SuccessResponse($description, $content, $code = 200)
    {
        $response['success']        = true;
        $response['description']    = $description;
        if (!empty($content)) {
            $response['content'] = $content;
        }
        return response()->json($response, $code);
    }

    protected function ErrorResponse($description, $errors, $content, $code = 400)
    {
        $response['success']        = false;
        $response['description']    = $description;
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
        if (!empty($content)) {
            $response['content'] = $content;
        }
        return response()->json($response, $code);
    }

    // Response if route not found
    public function fallbackResponse()
    {
        return $this->ErrorResponse('Route not found. Please enter valid URL.', null, null);
    }

    // Get blocked users ids
    public function blockedUserIds()
    {
        $login_id = Auth::id();
        $block_users = BlockUser::where('user_id', $login_id)->orWhere('blocked_user_id', $login_id)->get();

        $ids = $block_users->map(function ($item) {
            if ($item->user_id === auth()->id()) {
                return $item->blocked_user_id;
            } else {
                return $item->user_id;
            }
        });
        return $ids;
    }

    // Get deactivated users ids
    public function deactivatedUserIds()
    {
        return User::where('is_deactivated', 1)->pluck('id');
    }

    public function generateUsernameSuggestions($baseUsername)
    {
        $suggestions = [];

        $randomNumber1 = rand(100, 999);
        $randomNumber2 = rand(100, 999);

        $suggestionOrder = rand(1, 3); // Randomly decide the order of appending numbers

        if ($suggestionOrder == 1) {
            $suggestion1 = $baseUsername . '_' . $randomNumber1; // Append random numbers at the end
            $suggestion2 = $randomNumber2 . '_' . $baseUsername; // Append random numbers at the beginning
            $suggestion3 = $randomNumber1 . '_' . $baseUsername . '_' . $randomNumber2; // Append random numbers at both ends
        } elseif ($suggestionOrder == 2) {
            $suggestion1 = $randomNumber1 . '_' . $baseUsername; // Append random numbers at the beginning
            $suggestion2 = $baseUsername . '_' . $randomNumber2; // Append random numbers at the end
            $suggestion3 = $randomNumber1 . '_' . $baseUsername . '_' . $randomNumber2; // Append random numbers at both ends
        } else {
            $suggestion1 = $baseUsername . '_' . $randomNumber1 . '_' . $randomNumber2; // Append random numbers at both ends
            $suggestion2 = $randomNumber1 . '_' . $baseUsername; // Append random numbers at the beginning
            $suggestion3 = $randomNumber1 . '_' . $baseUsername . '_' . $randomNumber2; // Append random numbers at both ends
        }

        $suggestions = [$suggestion1, $suggestion2, $suggestion3];

        // Check if the suggestions already exist in the database and remove duplicates
        $suggestions = array_filter($suggestions, function ($suggestion) {
            $user = User::where('username', $suggestion)->first();
            return !$user;
        });

        return array_values($suggestions); // Re-index the array keys
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

    // Send OTP to phone number
    public function sendOtp($number, $otp)
    {

        try {
             $sid    = "ACd8c142ea99416d9af89445299be96297";
$token  = "c7160c85566c944a23ea1013a3e61947";

      $twilio = new Client($sid, $token);

      $twilio->messages
        ->create(
          $number, // to 
          array(
            "messagingServiceSid" => "MGe7de44663cc6449edc544ecd662df0f8",
                        "body" => $otp . " is your verification code for Dateify."
                    )
                );
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // Fetch timezone
    public static function fetchChatTimeZone()
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
        // $time = (new DateTime($created_at, new DateTimeZone('UTC')))
        //   ->setTimezone(new DateTimeZone($timezone))
        //   ->format('Y-m-d H:i:s');
        // $time = Carbon::parse($time);
        $time = Carbon::parse($created_at)->setTimezone($timezone);
        return $time;
    }

    public function getTime($timezone, $created_at, $value)
    {

        $current_meesage_date_time = $this->setTimezone($timezone, $created_at);
        if ($this->setTimezone($timezone, Carbon::now()->subDays(7)) <= $current_meesage_date_time) {
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

    //Push Notification
    public function sendPushNotification($user, $title, $body, $image, $type, $sender_id, $post, $group)
    {
        $firebaseToken = User::whereNotNull('device_token')->where('id', $user->id)->pluck('device_token')->all();
        $SERVER_API_KEY = 'AAAA3552Pik:APA91bEY34MscdqW8DRkjVrTU3auVwTnfbzBWDjWrKpUVAAEGmsLCsops6kCitbaIF3_6ypo_mph8HXKdIuGkDQm5B8Mr1ySb3oSi8eEbjjLJq53PqRdCndT6RvL7qAieOOHm1pLMMLL';
        $userBadgeCount = $this->userBadgeCount($user->id);

        $user = User::where('id', $sender_id)
            ->first();
        $sound = 'notification.wav';

        $data = [
            "registration_ids" => $firebaseToken,
            "image" => $image,
            "icon" => $image,
            "notification" => [
                "title" => $title,
                "body" => $body,
                "badge" => $userBadgeCount,
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
                'type' => $type,
                'user' => $user,
                "image" => $image,
                "icon" => $image,
                "group_id" => $group,
                "post_id" => $post,

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
        // dd($response);
    }

    /*
  #####################################
  #
  #   Get Unreaded Notifications Count of current user
  #   Return true|false 
  #
  ####################################
  */
    public function userBadgeCount($user_id)
    {
        $user = User::find($user_id);
        $unreaded_notifications_count = 0;
        if ($user->unreadNotifications != null) {
            $unreaded_notifications_count = $user->unreadNotifications->count();
        }
        return $unreaded_notifications_count;
    }
}
