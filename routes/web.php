<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index');

Route::get('/logout', 'LoginController@destroy');
