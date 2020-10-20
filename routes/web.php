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

Route::get('/posts/create', 'PostController@create');

Route::post('/posts/store', 'PostController@store');

Route::get('/posts/edit', 'PostController@edit');

Route::post('/posts/update', 'PostController@update');

Route::get('/users/index', 'UserController@index');

Auth::routes();
