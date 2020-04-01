<?php

Route::get('/', 'MainController@index')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::post('/about/calc', 'MainController@calculate')->name('calc');
Route::get('/team', 'MainController@team')->name('team');
Route::get('/contacts', 'MainController@contacts')->name('contacts');

Auth::routes();


Route::prefix('admin')->group(function () {

    Route::resource('home', 'AdminController');

//    Route::get('/home', 'AdminController@index')->name('home');
//
//    Route::get('/home/create', 'AdminController@create')->name('showStorePage');
//    Route::post('/home', 'AdminController@store')->name('addPost');
//
//    Route::get('/home/edit/{id}', 'AdminController@edit')->name('showEditPage');
//    Route::put('/home/{id}/edit', 'AdminController@update')->name('editPost');
//
//    Route::delete('/home/{id}','AdminController@destroy')->name('destroy');

});
