<?php

Route::group(['middleware' => 'auth'], function () {

    // Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('my-tickets', ['as' => 'my-tickets', 'uses' => 'HomeController@myTickets']);

});

Route::get('/', function() {
    return redirect('schools');
});

Route::resource('schools', 'SchoolController', ['only' => ['index', 'show']]);
Route::resource('tickets', 'TicketController', ['only' => ['index', 'show']]);

Route::get('auth/login',     ['as' => 'login',         'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',    ['as' => 'login.post',    'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',    ['as' => 'logout',        'uses' => 'Auth\AuthController@getLogout']);
Route::get('auth/register',  ['as' => 'register',      'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'register.post', 'uses' => 'Auth\AuthController@postRegister']);
