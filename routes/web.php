<?php


/*
 * Frontend
 * */

// auth
Route::get('/login', ['as' => 'login', 'uses' => 'Frontend\Auth\LoginController@index']);
Route::post('/login', 'Frontend\Auth\LoginController@doLogin');
Route::get('/logout', 'Frontend\Auth\LoginController@logout');

// main

Route::get('/', 'Frontend\HomeController@index')->name('home.index');
Route::get('/motorcycle/{id}', 'Frontend\HomeController@show');


/*
 * Backend
 * */

Route::middleware(['auth:web'])->prefix('admin')->group(function () {

    Route::get('/dashboard', 'Backend\HomeController@index');
    Route::resource('users', 'Backend\UsersController', ['except' => ['edit', 'update', 'show']]);
    Route::resource('motorcycles', 'Backend\MotorcyclesController');
});

