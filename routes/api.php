<?php

use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\ContactUsController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\NotificationController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\PostLikesController;
use App\Http\Controllers\Api\V1\UserController;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
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

    // Test push notification
    Route::get('test-push-notification', [NotificationController::class, 'testPushNotification']);
    /*
    |--------------------------------------------------------------------------
    | Authentication Routes
    |--------------------------------------------------------------------------
    */
    Route::post('register-otp', [AuthController::class, 'registerOtp']);
    Route::post('validate-register-otp', [AuthController::class, 'validateRegisterOtp']);
    Route::get('validate-username', [AuthController::class, 'validateUsername']);
    Route::post('register', [AuthController::class, 'register']);

    Route::post('login', [AuthController::class, 'login']);
    Route::post('validate-login-otp', [AuthController::class, 'validateLoginOtp']);

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout', [AuthController::class, 'logout']);


        /*
        |--------------------------------------------------------------------------
        | Post Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('posts')->group(function () {
            Route::get('/', [PostController::class, 'index']);
            Route::get('/my', [PostController::class, 'all_posts_list']);
            Route::post('create', [PostController::class, 'store']);
            Route::get('list', [PostController::class, 'list']);
            Route::post('react', [PostLikesController::class, 'store']);
            Route::delete('delete', [PostController::class, 'destroy']);
            Route::post('report', [PostController::class, 'report']);
            Route::get('/post', [PostController::class, 'show']);

            // Comments
            Route::prefix('comments')->group(function () {
                Route::get('/', [CommentController::class, 'index']);
                Route::get('/all', [CommentController::class, 'all_comments_list']);
                Route::post('create', [CommentController::class, 'store']);
                Route::post('react', [CommentController::class, 'react']);
                Route::post('report', [CommentController::class, 'report']);
                Route::get('/comment', [CommentController::class, 'show']);
                Route::delete('delete', [CommentController::class, 'destroy']);
            });
        });

        /*
        |--------------------------------------------------------------------------
        | Group Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('groups')->group(function () {
            Route::get('/', [GroupController::class, 'list']);
            Route::post('create', [GroupController::class, 'store']);
            Route::post('add-participant', [GroupController::class, 'addParticipant']);
            Route::post('leave', [GroupController::class, 'leave']);
            Route::get('search', [GroupController::class, 'search']);
        });

        /*
        |--------------------------------------------------------------------------
        | User Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'show']);
            Route::post('update', [UserController::class, 'update']);
            Route::post('update/notification-setting', [UserController::class, 'updateNotificationSettings']);
            Route::post('block', [UserController::class, 'block']);
            Route::post('unblock', [UserController::class, 'unblock']);
            Route::post('blocked-list', [UserController::class, 'myBlockedList']);
            Route::delete('delete-account', [UserController::class, 'deleteAccount']);
            Route::post('deactivate-account', [UserController::class, 'deactivateAccount']);
            // Update User device token for notification
            Route::post('device-token', [UserController::class, 'updateDeviceToken']);

            //Get All Notifications
            Route::get('/notifications', [NotificationController::class, 'notifications']);

            //Delete Notification
            Route::delete('delete-notification', [NotificationController::class, 'deleteNotification']);

            //Read Notification
            Route::post('read-notification', [NotificationController::class, 'readNotification']);

            //Read Notification
            Route::post('read-notifications', [NotificationController::class, 'readNotifications']);
        });

        /*
        |--------------------------------------------------------------------------
        | Contact us Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('support')->group(function () {
            Route::post('contact-us', [ContactUsController::class, 'contactus']);
        });
    });
});
