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
Route::post('/insert-item', [App\Http\Controllers\TestController::class, 'insert_item']);
Route::get('/show_item', [App\Http\Controllers\TestController::class, 'show_item']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
