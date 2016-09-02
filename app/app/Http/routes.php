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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'admin', 'namespace' => '\admin', 'middleware' => ['auth', 'is_admin']], function() {
    Route::get('/', function() {
        return 'admin';
    });
});

Route::group(['prefix' => 'user', 'namespace' => '\user', 'middleware' => ['auth', 'is_invited']], function() {
    Route::get('/', function() {
        return 'user';
    });
});