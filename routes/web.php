<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/going/{id}', 'HomeController@register');

Route::get('/search','HomeController@search');

Route::get('/guests','HomeController@attend');

Route::get('/checkname', 'HomeController@checkname');
