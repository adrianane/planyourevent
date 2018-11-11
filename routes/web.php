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

Route::get('/', 'PagesController@home');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/foto', 'PagesController@foto');

Route::get('/video', 'PagesController@video');

Route::get('/locations', 'PagesController@locations');