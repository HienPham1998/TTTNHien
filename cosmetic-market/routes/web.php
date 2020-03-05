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

Route::get('/', "ClientController@index");
Route::get('/product-detail/{id}','ClientController@getProductDetail');
Route::get('/category/{id}','ClientController@getProductByCategory');
Route::get('/cart','ClientController@getCart');
Route::get('/add-to-cart/{id}','ClientController@addToCart');
Route::get('/remove-from-cart/{id}','ClientController@removeFromCart');
Route::get('update-cart/{id}','ClientController@updateCart');