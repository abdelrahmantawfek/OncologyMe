<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth
Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('forget-password', [App\Http\Controllers\Api\AuthController::class, 'forgetPassword']);
Route::get('register-data', [App\Http\Controllers\Api\AuthController::class, 'registerData']);

// Profile
Route::group(['middleware' => ['auth:sanctum', 'user']], function () {
    Route::controller(App\Http\Controllers\Api\ProfileController::class)->group(
        function () {
            Route::post('/update-profile', 'update_profile');
            Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
        }
    );

});

// Pages
Route::controller(App\Http\Controllers\Api\PageController::class)->group(
    function (){
        Route::get('/home',  'home');
        Route::get('/pages/{slug}',  'pages');
        Route::get('/feedback',  'feedback');

    }
);

// Posts & Topics
Route::controller(App\Http\Controllers\Api\PostController::class)->group(
    function () {
        Route::get('/topics', 'topics'); 
        Route::get('/topics/{slug}', 'topic');
        Route::get('/posts', 'posts');
        Route::get('/posts/{slug}', 'post');
    }
);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
