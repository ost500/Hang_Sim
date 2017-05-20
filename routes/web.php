<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/event_list', 'HomeController@event_list');

Route::get('/event_single/{articleId}', 'HomeController@event_single');


Route::post('/abcd','HomeController@abcd');


Auth::routes();

Route::get('/home', 'HomeController@index');
