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

Route::get('clubs', function() {
    return App\Clubs::all();
});

Route::get('diamonds', function() {
    return App\Diamonds::all();
});

Route::get('hearts', function() {
    return App\Hearts::all();
});

Route::get('jokers', function() {
    return App\Jokers::all();
});

Route::get('spades', function() {
    return App\Spades::all();
});