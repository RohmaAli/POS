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
Route::get('/view/Products','AdminController@viewProducts')->name('viewProducts');
Route::post('/actions/products', 'AdminController@productActions')->name('productActions');
Route::post('/store/products','AdminController@storeProducts')->name('storeProducts');
Route::post('/edit/products','AdminController@editProducts')->name('editProduct');
Route::get('/view/sizes','AdminController@viewSizes')->name('viewSizes');
Route::post('/actions/sizes', 'AdminController@sizeActions')->name('sizeActions');
Route::post('/store/sizes','AdminController@storeSizes')->name('storeSize');
Route::post('/edit/sizes','AdminController@editSizes')->name('editSize');
Route::get('/view/weights','AdminController@viewWeights')->name('viewWeights');
Route::post('/actions/weight', 'AdminController@weightActions')->name('weightActions');
Route::post('/store/weight','AdminController@storeWeights')->name('storeWeight');
Route::post('/edit/weights','AdminController@editWeight')->name('editWeight');
Route::get('/view/customers','AdminController@viewCustomers')->name('viewCustomers');
Route::post('/actions/customer', 'AdminController@customerActions')->name('customerActions');
Route::post('/store/customer','AdminController@storeCustomer')->name('storeCustomer');
Route::post('/edit/customer','AdminController@editCustomer')->name('editCustomer');
Route::get('/view/dailyExpense','AdminController@viewDailyExpense')->name('viewDailyExpense');
Route::post('/actions/expense', 'AdminController@expenseActions')->name('expenseActions');
Route::post('/edit/expense','AdminController@editExpense')->name('editExpense');
Route::post('/store/expense','AdminController@storeExpense')->name('storeExpense');
Route::get('/view/sales', 'AdminController@viewSales')->name('viewSales');
Route::get('/add-to-cart/{id}', 'AdminController@getAddToCart')->name('product.addtocart');
Route::get('/shopping-cart', 'AdminController@getCart')->name('product.shoppingCart');
Route::get('/remove/item/{id}', 'AdminController@removeItem')->name('products.remove');
Route::post('/total', 'AdminController@total')->name('products.total');
Route::post('/payment/recieved','AdminController@storeAmount')->name('amountRecieved');
Route::get('/sale/{id}', 'AdminController@sale')->name('products.sale');

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
