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

Route::get('/', 'LayoutController@mainLayout');

Route::get('/heart', 'HeartsController');
Route::get('/club', 'ClubsController');
Route::get('/diamond', 'DiamondsController');
Route::get('/spade', 'SpadesController');
Route::get('/joker', 'JokersController');


Route::get('selecting-card-error', function() {
    return view('layouts/error',  [ 'operation' => 'Selecting',
                                    'problem' => 'Card']);
});