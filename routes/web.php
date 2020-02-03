<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', function (){


});

Route::get('/search','HomeController@search');

Route::get('/guests','HomeController@attend');