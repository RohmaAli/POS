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
    return view('welcome');
});

//admin 
Route::get('/admin','AdminController@view');
Route::get('/view/storeProducts','AdminController@viewStoreProducts')->name('viewProducts');
Route::post('/store/products','AdminController@storeProducts')->name('store');

//customer
Route::get('/customer/dashboard','CustomerController@viewStoreProducts')->name('viewProducts');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
