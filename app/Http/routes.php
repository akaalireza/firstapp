<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PostController@index');
Route::get('show/{id}','PostController@show');
Route::get('delete/{id}','PostController@destroy');
Route::get('create','PostController@create');
Route::get('edit/{id}','PostController@edit');
Route::post('update/{id}','PostController@update');
Route::post('search','PostController@search');
Route::post('store','PostController@store');

Route::controller('auth','Auth\AuthController');
Route::controller('password','Auth\PasswordController');