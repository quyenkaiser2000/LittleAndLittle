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

Route::get('/', function () {
    return view('front.index');
});
Route::get('/event', function () {
    return view('front.event');
});
Route::get('/event/detail', function () {
    return view('front.event_detail');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/checkout', function () {
    return view('front.check-out');
});
Route::get('/checkout-result', function () {
    return view('front.checkout-result');
});

