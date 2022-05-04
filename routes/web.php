<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaytmController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;   
use App\Http\Controllers\BotManController; 

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


// Route::get('/', function () {
    
   
// });
Route::get('/', [App\Http\Controllers\USER\IndexController::class, 'home']);

Route::get('/get_fas', [App\Http\Controllers\TestController::class, 'get_fas']);

Route::post('/insert-item', [App\Http\Controllers\TestController::class, 'insert_item']);
Route::get('/form', [App\Http\Controllers\TestController::class, 'form']);


//register user
Route::get('/sign-up', [App\Http\Controllers\USER\UserRegistrationController::class, 'sign_up'])->name('sign_up');
Route::post('/sign-up', [App\Http\Controllers\USER\UserRegistrationController::class, 'createsign_up'])->name('createsign_up');
Route::get('/sign_in.sav', [App\Http\Controllers\USER\UserRegistrationController::class, 'sign_in'])->name('sign_in');
Route::post('/sign_in', [App\Http\Controllers\USER\UserRegistrationController::class, 'signed_in'])->name('signed_in');
Route::get('/logout', [App\Http\Controllers\USER\UserRegistrationController::class, 'logout'])->name('logout');



Auth::routes();
// Route::get('/', function () {
//     return view('welcom');
// });
Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\USER\IndexController::class, 'index'])->name('index');
Route::get('/all_rooms', [App\Http\Controllers\USER\PropertyController::class, 'all_rooms'])->name('all_rooms');
//
//Route::get('/get_room', [App\Http\Controllers\USER\PropertyController::class, 'get_room'])->name('all_rooms');
//
Route::get('/single_room', [App\Http\Controllers\USER\PropertyController::class, 'single_room'])->name('single_room');
Route::get('/my-room', [App\Http\Controllers\USER\PropertyController::class, 'my_room'])->name('my_room');

Route::get('/about', [App\Http\Controllers\USER\AboutController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\USER\ContactController::class, 'contact'])->name('contact');
Route::post('/create-Room', [App\Http\Controllers\USER\PropertyController::class, 'create_room'])->name('create_room');
Route::get('/edit_Myroom/{id}', [App\Http\Controllers\USER\PropertyController::class, 'edit_Myroom'])->name('edit_Myroom');
Route::post('/edit-Room/{id}', [App\Http\Controllers\USER\PropertyController::class, 'edit_room'])->name('edit_room');

//stripe
Route::get('checkout',[CheckoutController::class, 'checkout']);
    Route::post('checkout',[CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');
//
// //Paytm Payment
// Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
// Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
// Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');

// //paytm end

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





