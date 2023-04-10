<?php

use App\Http\Controllers\Api\V1\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::fallback([ApiController::class, 'fallbackResponse']);

// Kiri App APIs Version 1
Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function () {

    /*
    |--------------------------------------------------------------------------
    | Authentication Routes
    |--------------------------------------------------------------------------
    */
    Route::post('register', [AuthController::class, 'register']);
    Route::post('validate-register-otp', [AuthController::class, 'validateRegisterOtp']);

    // Route::post('login', [AuthController::class, 'login']);
    // Route::post('validate-login-otp', [AuthController::class, 'validateLoginOtp']);

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout', [AuthController::class, 'logout']);

        /*
        |--------------------------------------------------------------------------
        | User Routes
        |--------------------------------------------------------------------------
        */
        
        Route::prefix('user')->group(function () {
            
            
        });
    });
});