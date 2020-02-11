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
Route::get('/skelbimas/{ad}', 'HomeController@showSkelbimas');
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact', 'HomeController@showContact');
Route::get('/addCat', 'CatController@addCat');
Route::post('/store-category', 'CatController@storeCategory');
Route::get('/controlCat', 'CatController@showCategories');
Route::get('/addAd', 'AdController@addAd');
Route::get('/salinti/category/{category}', 'CatController@deleteCat');
Route::get('/salinti/ad/{ad}', 'AdController@deleteAd');
Route::post('/store-ad', 'AdController@storeAd');
Route::get('/controlAds', 'AdController@showAds');
Route::get('/updateAd/ad/{ad}', 'AdController@updateAd');
Route::get('/ad_update/{ad}', 'AdController@ad_update');
Route::get('/searchIt', 'AdController@search');



