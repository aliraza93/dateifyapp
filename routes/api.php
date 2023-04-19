<?php

use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\PostController;
use App\Models\Group;
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
    Route::post('register-otp', [AuthController::class, 'registerOtp']);
    Route::post('validate-register-otp', [AuthController::class, 'validateRegisterOtp']);
    Route::post('register', [AuthController::class, 'register']);

    Route::post('login', [AuthController::class, 'login']);
    Route::post('validate-login-otp', [AuthController::class, 'validateLoginOtp']);

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout', [AuthController::class, 'logout']);
    
    
    Route::prefix('posts')->group(function () { 
        Route::post('create', [PostController::class, 'new_post']);
        Route::get('list', [PostController::class, 'group_posts_list']);
    }); 

    Route::prefix('groups')->group(function () { 
        
        Route::post('create', [GroupController::class, 'new_group']);
        Route::post('add-participant', [GroupController::class, 'add_participants']);
    });    
});
});