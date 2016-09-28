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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/messageboard', function () {
    return view('MessageBoard');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/my', 'MyController@index');
