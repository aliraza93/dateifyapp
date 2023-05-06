<?php

use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\PostLikesController;
use App\Http\Controllers\Api\V1\UserController;
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
        
            // Comments
            Route::prefix('comments')->group(function () {
                Route::get('/', [CommentController::class, 'index']);
                Route::get('/all', [CommentController::class, 'all_comments_list']);
                Route::post('create', [CommentController::class, 'store']);
                Route::post('react', [CommentController::class, 'react']);
                Route::post('report', [CommentController::class, 'report']);
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
        });

        /*
        |--------------------------------------------------------------------------
        | User Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'show']);
            Route::post('update', [UserController::class, 'update']);
            Route::post('block', [UserController::class, 'block']);
            Route::post('unblock', [UserController::class, 'unblock']);
            Route::post('blocked-list', [UserController::class, 'myBlockedList']);
            Route::delete('delete-account', [UserController::class, 'deleteAccount']);
        });
    });
});
