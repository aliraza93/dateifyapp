<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    // Get logged in user's details
    public function show()
    {
        try {
            // Autheticate user
            $user  = User::find(auth()->id());
            if (!$user) {
                return $this->ErrorResponse('No user found in our database. Please try again', null, null);
            }
            $user = User::where('id', auth()->id())->first()->append('images');
            
            return $this->SuccessResponse($this->dataRetrieved, [
                'user' => $user,
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
