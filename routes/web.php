<?php

use App\Models\Room;
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
    $data = Room::orderBy('id', 'DESC')->get()->toArray();
        //dd($data[0],$data[1],$data[2]);exit;
        $latestrooms =[ $data[0],$data[1],$data[2]];
        //dd($latestrooms);
        return view('index',["latestrooms"=>$latestrooms] );
});
Route::get('/get_fas', [App\Http\Controllers\TestController::class, 'get_fas']);

Route::post('/insert-item', [App\Http\Controllers\TestController::class, 'insert_item']);
Route::get('/form', [App\Http\Controllers\TestController::class, 'form']);


//register user
Route::get('/sign-up', [App\Http\Controllers\USER\UserRegistrationController::class, 'sign_up'])->name('sign_up');
Route::post('/sign-up', [App\Http\Controllers\USER\UserRegistrationController::class, 'createsign_up'])->name('createsign_up');
Route::get('/sign_in.sav', [App\Http\Controllers\USER\UserRegistrationController::class, 'sign_in'])->name('sign_in');
Route::post('/sign_in', [App\Http\Controllers\USER\UserRegistrationController::class, 'signed_in'])->name('signed_in');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\USER\IndexController::class, 'index'])->name('index');
Route::get('/all_rooms', [App\Http\Controllers\USER\PropertyController::class, 'all_rooms'])->name('all_rooms');
//
//Route::get('/get_room', [App\Http\Controllers\USER\PropertyController::class, 'get_room'])->name('all_rooms');
//
Route::get('/single_room/{?}', [App\Http\Controllers\USER\PropertyController::class, 'single_room'])->name('single_room');

Route::get('/about', [App\Http\Controllers\USER\AboutController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\USER\ContactController::class, 'contact'])->name('contact');
Route::post('/create-Room', [App\Http\Controllers\USER\PropertyController::class, 'create_room'])->name('create_room');
//Route::get('/', [App\Http\Controllers\USER\PropertyController::class, 'create_room'])->name('create_room');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





