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

Route::get('/', 'FrontController@index');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::post("auth/verify", "FrontController@verification_data");

Route::group(['prefix' => 'admin', 'namespace' => '\admin', 'middleware' => ['auth', 'is_admin']], function() {
    Route::get('/', function() {
        return view('admin/dashboard');
    });

    Route::resource('locals', 'LocalController');
    Route::get('locals/showDelete/{id}', 'LocalController@showDelete');

    Route::resource('categories','CategoryController');
    


    Route::get('news/showPayments/{id}', 'NewsController@showPayments');
    Route::get('news/showDelete/{id}', 'NewsController@showDelete');
    Route::resource('news', 'NewsController');
});

Route::group(['prefix' => 'user', 'namespace' => '\user', 'middleware' => ['auth', 'is_invited']], function() {

    Route::get('/', function() {
        return view('user/dashboard');
    });
    
});