<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(["middleware" => ["auth"]], function() {
    Route::resource('rooms', 'RoomController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('guests', 'GuestController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('bookings', 'BookingController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

Route::resource('rooms', 'RoomController', ['only' => ['index', 'show']]);
Route::resource('guests', 'GuestController', ['only' => ['index', 'show']]);
Route::resource('bookings', 'BookingController', ['only' => ['index', 'show']]);
