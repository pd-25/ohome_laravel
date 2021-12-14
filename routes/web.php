<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;    

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
//register user
Route::get('/sign-up', [App\Http\Controllers\USER\UserSignUpController::class, 'sign_up'])->name('sign_up');
Route::post('/sign-up', [App\Http\Controllers\USER\UserSignUpController::class, 'createsign_up'])->name('createsign_up');
Route::get('/sign_in', [App\Http\Controllers\USER\UserSignUpController::class, 'sign_in'])->name('sign_in');
Route::post('/sign_in', [App\Http\Controllers\USER\UserSignUpController::class, 'signed_in'])->name('signed_in');


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\USER\IndexController::class, 'index'])->name('home');
Route::get('/all_rooms', [App\Http\Controllers\USER\PropertyController::class, 'all_rooms'])->name('all_rooms');

Route::get('/about', [App\Http\Controllers\USER\AboutController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\USER\ContactController::class, 'contact'])->name('contact');
