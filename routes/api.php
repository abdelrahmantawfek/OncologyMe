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

// Profile
Route::group(['middleware' => ['auth:sanctum', 'user']], function () {
    Route::controller(App\Http\Controllers\Api\ProfileController::class)->group(
        function () {
            Route::post('/update-profile', 'update_profile');
        }
    );
});

// Pages
Route::controller(App\Http\Controllers\Api\PageController::class)->group(
    function (){
        Route::get('/pages/{slug}',  'pages');
    }
);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
