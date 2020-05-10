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
Route::get('/product-detail/{id}', 'ClientController@getProductDetail');
Route::get('/category/{id}', 'ClientController@getProductByCategory');
Route::get('/cart', 'ClientController@getCart');
Route::get('/add-to-cart/{id}', 'ClientController@addToCart');
Route::get('/remove-from-cart/{id}', 'ClientController@removeFromCart');
Route::get('update-cart/{id}', 'ClientController@updateCart');
Route::get('post-product', 'ClientController@postProduct');
Route::get('bill/{id}', 'ClientController@getBill');

Route::get('profile', 'ProfileController@getProfile');


Route::get('update-profile', 'ClientController@getUpdateProfile');
Route::post('update-profile', 'ClientController@postUpdateProfile');
Route::put('/profile/changepassword', 'ProfileController@updatePassword');

Route::get('login', 'Auth\LoginController@getLogin');
Route::post('login', 'Auth\LoginController@postLogin');

Route::get('register', 'Auth\LoginController@getRegister');
Route::post('register', 'Auth\LoginController@postRegister');

Route::get('logout', 'Auth\LoginController@logout');
Route::put('addAddress', 'ClientController@addAddress');

Route::get('register-store', 'ClientController@registerStore');
// Route::post('register-store','Auth\LoginController@postSaler');
Route::post('register-store', 'ClientController@postSaler');

Route::get('/manage', 'AdminController@getAdmin');

Route::get('/manage/customers/index', 'CustomerController@index');
Route::put('/manage/customers/update/{id}', 'CustomerController@update');
Route::delete('/manage/customers/destroy/{id}', 'CustomerController@destroy');

Route::get('/manage/salers/index', 'SalerController@index');
Route::put('/manage/salers/update/{id}', 'SalerController@update');
Route::delete('/manage/salers/destroy/{id}', 'SalerController@destroy');

Route::get('/profile/index', 'ProductController@index');
Route::put('/profile/update/{id}', 'ProductController@update');
Route::delete('/profile/destroy/{id}', 'ProductController@destroy');
Route::post('/profile/index', 'ProductController@add');

Route::get('send', 'EmailController@sendEmail');
// Route::get('test', function(Request $request) {

//     $currentUser = Auth::user()->id;

//     // dd($currentUser);
//     dd($request);

//     Log::info($currentUser); // will show in your log
//     Log::info($request); // will show in your log

//     var_dump($currentUser);

// });
