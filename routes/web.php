<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');


Route::get('/event',[App\Http\Controllers\EventController::class,'index'])->name('event');
Route::get('/event/{id}',[App\Http\Controllers\EventController::class,'detail'])->name('detail-event');


Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact',[App\Http\Controllers\ContactController::class,'sendmail'])->name('sendmail');


Route::get('/checkout', function () {
    return view('front.check-out');
});
Route::get('/checkout-result', function () {
    return view('front.checkout-result');
});

