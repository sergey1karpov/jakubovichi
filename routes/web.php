<?php

Route::get('/', 'MainController@index')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::post('/about/calc', 'MainController@calculate')->name('calc');
Route::get('/team', 'MainController@team')->name('team');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/post/{id}', 'MainController@show')->name('showPost');

Route::match(['get', 'post'], '/converter', 'MainController@calculate')->name('calculate');

Route::post('/post/{id}/', 'CommentController@store')->name('addComment');
Route::delete('/post/{id}', 'CommentController@delete')->name('deleteComment');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::resource('home', 'AdminController');
});
