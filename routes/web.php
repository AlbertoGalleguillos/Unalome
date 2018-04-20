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

use App\Post;

Route::get('/', function () {
    $posts = Post::published();
    return view('index', compact('posts'));
});

Route::get('/admin', 'AdminController@index');
Route::get('/edit/{post}', 'AdminController@edit');
Route::patch('/edit/{post}', 'AdminController@update');
Route::get('/create', 'AdminController@create');
Route::post('/create', 'AdminController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
