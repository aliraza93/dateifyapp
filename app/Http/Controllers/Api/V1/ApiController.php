<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
