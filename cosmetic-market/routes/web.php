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
Route::get('/add-to-cart/{product_id}', 'ClientController@addToCart');
Route::get('/remove-from-cart/{id}', 'ClientController@removeFromCart');
Route::get('/update-cart/{id}', 'ClientController@updateCart');
Route::get('post-product', 'ClientController@postProduct');
Route::get('bill/{id}', 'ClientController@getBill');
Route::post('order', 'ClientController@postBill');
Route::get('/update-transport/{id}', 'ClientController@updateTransport');

Route::get('profile', 'ProfileController@getProfile');

Route::get('update-profile/{id}', 'ClientController@getUpdateProfile');
Route::put('update-profile/{id}', 'ClientController@postUpdateProfile');
Route::put('/profile/changepassword', 'ProfileController@updatePassword');

Route::get('login', 'Auth\LoginController@getLogin');
Route::post('login', 'Auth\LoginController@postLogin');

Route::get('register', 'Auth\LoginController@getRegister');
Route::post('register', 'Auth\LoginController@postRegister');

Route::get('logout', 'Auth\LoginController@logout');
Route::post('addAddress', 'ClientController@addAddress');
Route::put('address/update/{id}', 'ClientController@updateAddress');

Route::get('register-store', 'ClientController@registerStore');
// Route::post('register-store','Auth\LoginController@postSaler');
Route::post('register-store', 'ClientController@postSaler');
// admin manage 
Route::get('/manage', 'AdminController@getAdmin');
Route::get('manage/verifyProduct', 'AdminController@verifyProduct');

Route::get('/manage/customers/index', 'CustomerController@index');
Route::put('/manage/customers/update/{id}', 'CustomerController@update');
Route::delete('/manage/customers/destroy/{id}', 'CustomerController@destroy');

Route::get('/manage/salers/index', 'SalerController@index');
Route::put('/manage/salers/update/{id}', 'SalerController@update');
Route::delete('/manage/salers/destroy/{id}', 'SalerController@destroy');
Route::get('/go-to-shop/{id}', 'SalerController@goToShop');

Route::get('/profile/index', 'SalerController@getProduct');
Route::put('/profile/update/{id}', 'ProductController@update');
Route::delete('/profile/destroy/{id}', 'ProductController@destroy');
Route::post('/profile/index', 'ProductController@add');

Route::get('/order', 'ClientController@getOrder');
Route::put('order/delete/{id}', 'ClientController@deleteOrder');

Route::get('profile/list', 'SalerController@getListPending');
Route::put('profile/approve/{id}', 'SalerController@changeStatusOrder');
Route::delete('profile/reject/{id}', 'SalerController@rejectOrder');

Route::get('profile/history', 'SalerController@getHistory');
Route::get('history', 'ClientController@getHistory');

Route::get('verify', 'ClientController@getVerify');
Route::post('send-verify', 'ClientController@verifySaler');

Route::get('send', 'EmailController@sendEmail');
Route::get('statistic', 'SalerController@statisticIndex');
Route::get('productstatistic', 'SalerController@productStatistic');

Route::get('test', function (Request $request) {

    return App\Category::with('childs')->where('id', 1)->get();

});
