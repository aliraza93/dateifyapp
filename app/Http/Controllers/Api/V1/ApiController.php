<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlockUser;
use App\Models\User;
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
        return User::where('is_deactivated', 1)->pluck('user_id');
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

    // Send OTP to phone number
  public function sendOtp($number, $otp)
  {
    
    try {
      $sid    = "AC59b6155fa6212afbb8130715e0b57f11";
      $token  = "16d5f42d269c620c7a15e88dcea8c160";
      $twilio = new Client($sid, $token);

      $twilio->messages
        ->create(
          $number, // to 
          array(
            "messagingServiceSid" => "MG2564fe869ffd8c9f74c185a8e5983722",
            "body" =>$otp . " is your verification code for Dateify."
          )
        );
    } catch (\Exception $e) {
      return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
    }

  }
}
