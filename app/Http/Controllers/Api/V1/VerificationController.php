<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class VerificationController extends ApiController
{
    //Upload Verification image
    public function verificationImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif',
            'image_tag'         => 'required|string',
            'previous_image_id' => 'nullable',
            'user_id'           => 'required|integer'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $user = User::where('id', $request->user_id)->first();
            if (!$user) {
                return $this->ErrorResponse('Invalid user id provided. Please enter valid user id.', null, null);
            }
            $user = $user->append('VerificationImages');
            // $user = User::find(Auth::id())->append('VerificationImages');
            if (count($user->VerificationImages) >= 2) {
                foreach ($user->VerificationImages as $image) {
                    if ($image['image_tag'] == $request->image_tag) {
                        $mediaItem = Media::find($image['id']);
                        $mediaItem->delete();
                    }
                }
            }
            $file = $request->file('image');
            if ($request->hasFile('image')) {
                $mediaItems = $user->addMedia($file)->toMediaCollection('verification_images');
                $mediaItems->setCustomProperty('image_tag', $request->image_tag);
                $mediaItems->save();
            }

            // create verification record
            $verification = new Verification();
            $verification->verification_status = 'pending';
            $verification->user_id = $user->id;
            $verification->save();

            return $this->SuccessResponse($this->dataUpdated, [
                'id'    => $mediaItems->id,
                'image_tag'    => $mediaItems->custom_properties['image_tag'],
                'url' => $mediaItems->getFullUrl(),
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
}
