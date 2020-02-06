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

Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@showProfile');
Route::get('/skelbimai', 'HomeController@showSkelbimai');
Route::get('/skelbimas', 'HomeController@showSkelbimas');
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact', 'HomeController@showContact');

