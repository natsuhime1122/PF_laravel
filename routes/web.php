<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@top');

Route::get('/posts/index', 'PostController@index');
Route::post('/posts/store', 'PostController@store');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::get('/posts/{id}', 'PostController@show');
Route::patch('/posts/{id}', 'PostController@update');
Route::post('/posts/{id}', 'PostController@destroy')->name('delete');

Route::get('/users/profile', 'UserController@profile');
Route::get('/users/edit', 'UserController@edit');
Route::get('/users/{id}', 'UserController@index');
Route::patch('/users/{id}', 'UserController@update');

Route::post('/comments/store', 'CommentController@store');
Route::get('/comments/{id}/edit', 'CommentController@edit');
Route::patch('/comments/{id}', 'CommentController@update');
Route::post('/comments/{id}', 'CommentController@destroy')->name('commentDelete');

Auth::routes();
