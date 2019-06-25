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
Route::get('/listing', 'HomeController@listing');
Route::get('/listing/single', 'HomeController@show');
Route::get('/listing/create', 'ListingController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
