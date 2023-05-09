<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends ApiController
{
    public function contactus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'             => 'required',
            'sugesstions'       => 'nullable|string',
            
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }
        
        try {
            
            $user = User::find(auth()->id());
            
              $support = new ContactUs();
              $support->email = $request->email;
              $support->sugesstions = $request->sugesstions;
                if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    $user->addMedia($image)->toMediaCollection('support_image');
                }
                 }
              $user->contactus()->save($support);
              return $this->SuccessResponse('Added Succesfully.', null);
            
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
