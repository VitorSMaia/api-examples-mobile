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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::resource('contacts', \App\Http\Controllers\Api\v1\ContactController::class,['only' => [
            'index', 'store', 'show', 'update', 'destroy'
        ]]);
    });
    Route::get('user/register',[ App\Http\Controllers\Api\v1\RegisterController::class, 'register']);
    Route::get('user/login',[ App\Http\Controllers\Api\v1\RegisterController::class, 'login']);
});

// Route::prefix('v1')->group(function () {

// });

// Route::controller(\App\Http\Controllers\Api\v1\RegisterController::class)->group(function(){
//     Route::post('register', 'register');
//     Route::post('login', 'login');
// });

