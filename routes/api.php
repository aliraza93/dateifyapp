<?php

use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\PostController;
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
            Route::post('create', [PostController::class, 'store']);
            Route::get('list', [PostController::class, 'list']);
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
        });

        /*
        |--------------------------------------------------------------------------
        | User Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'show']);
        });
    });
});
