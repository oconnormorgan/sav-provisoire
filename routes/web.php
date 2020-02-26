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

Route::get('/', 'AccueilController@index');
Route::get('/', 'AccueilController@show');

Route::get('/{id}', 'ClientsController@show')->where('id', "[0-9]+");

Route::get('/{id}', 'ExchangesController@show')->where('id', "[0-9]+");
Route::post('{id}/exchanges', 'ExchangesController@store')->where('id', "[0-9]+");
