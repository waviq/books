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
Route::get('/','LoginController@getLogin');
Route::get('home','HomeController@index');
Route::resource('book','BookController',['except'=>['edit','update','show']]);
Route::post('book/editedTitle','BookController@postEditTitle');
Route::post('book/editedAuthor','BookController@postEditAuthor');
Route::post('auth/login','LoginController@postLogin');
Route::get('auth/logout', 'LoginController@getLogout');

Route::resource('user','UserController');

