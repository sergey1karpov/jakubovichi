<?php

Route::get('/', 'MainController@index')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/team', 'MainController@team')->name('team');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
