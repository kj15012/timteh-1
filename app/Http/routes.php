<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|




*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');
Route::get('/my_html', 'PostsController@my_html');
Route::get('post/{id}/{name}', 'PostsController@show_post');