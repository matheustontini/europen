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
Route::get('/howitworks', 'HomeController@howitworks');
Route::get('/listing', 'ListingController@listing');
Route::get('/listing/single/{id}', 'ListingController@show');
Route::get('/listing/create', 'ListingController@create');
Route::post('/listing', 'ListingController@store');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
