<?php

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@index');

Route::get('/login', 'LoginController@index');
