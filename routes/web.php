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
Route::get('/listing/user/listing', 'ListingController@userListing');
Route::get('/listing/user/{id}', 'HomeController@edit');
Route::post('/listing/user/{id}', 'HomeController@update');
Route::get('/listing/{id}/edit', 'ListingController@edit');
Route::post('/listing/{id}/edit', 'ListingController@update');
Auth::routes();
Route::get('/home', 'HomeController@home')->name('home');
