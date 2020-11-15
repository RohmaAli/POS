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

Route::get('/', function () {
    return view('customer.dashboard');
});

//admin 
Route::get('/admin','AdminController@view')->name('admin');
Route::get('/view/storeProducts','AdminController@viewStoreProducts')->name('viewProducts');
Route::post('/store/products','AdminController@storeProducts')->name('store');
Route::get('/view/purchasing','AdminController@viewPurchasing')->name('purchase');
Route::get('/view/sale', 'AdminController@viewSale')->name('viewSale');
Route::post('/calculate/bill', 'AdminController@calculateBill')->name('bill');
Route::post('/pay/bill','AdminController@payBill')->name('payBill');
Route::post('/check/customer', 'AdminController@checkCustomer')->name('customer');
Route::post('/new/customer', 'AdminController@createNewCustomer')->name('newCustomer');
Route::post('/existing/customer', 'AdminController@existingCustomer')->name('existingCustomer');
Route::get('/view/customer/detail', 'AdminController@viewCustomerDetail')->name('customerDetail');
Route::post('/customer/detail', 'AdminController@customerDetail')->name('details');
Route::post('/pay/remaining/balance', 'AdminController@payRemainingBalance')->name('remaning');
Route::get('/products', 'AdminController@viewProducts')->name('products');

//customer
Route::get('/customer/dashboard','CustomerController@dashboard');
Route::get('/customer/dailyExpense', 'CustomerController@viewDailyExpense')->name('viewExpense');
// Route::get('/customer/view/sale', 'CustomerController@viewSale')->name('viewSale');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
