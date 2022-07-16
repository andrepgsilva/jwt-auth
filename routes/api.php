<?php

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

Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/auth/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::post('/auth/refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);

Route::get('/test', function () {
    return [
        'message' => 'Vamosssssssssssssss!',
    ];
})->middleware('auth.jwt');
