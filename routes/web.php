<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store');

//Route::get('/login', 'LoginController@index');

Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@index']);

Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/search', 'AnnouncesController@index');

Route::get('/create', 'AnnouncesController@create');

Route::get('/cars/{announce}', 'AnnouncesController@show');

Route::post('/create', 'AnnouncesController@store');
