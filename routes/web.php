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

Route::get('/order', 'OrderController@index');
Route::post('/order/post', 'OrderController@post');
Route::get('/alcohols', 'AlcoholController@index');
Route::get('/softs', 'SoftController@index');
