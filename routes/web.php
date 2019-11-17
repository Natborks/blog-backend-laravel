<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'StaticPages@home');

//Blog routes
Route::get('/blog', 'PostsController@index');
Route::get('posts/new', 'PostsController@create');
Route::get('post/{post}', 'PostsController@show');
Route::post('posts/', 'PostsController@store');
Route::put('post/{post}', 'PostsController@update');
Route::delete('post/{posr}', 'PostsController@delete');
