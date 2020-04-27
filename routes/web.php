<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', 'BookController');

Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
