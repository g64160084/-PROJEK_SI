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
    return view('index');
    // return view('welcome');
});
Auth::routes();

Route::get('/home', function () {
    return view('index');
    // return view('welcome');
});
Auth::routes();

Route::get('/index', function () {
    return view('index');
    // return view('welcome');
});
Auth::routes();

Route::get('/toko', 'TokoController@toko');

Route::get('/products', 'ProductsController@products');
Route::post('/products/store', 'ProductsController@store')->name('products.store');

Route::get('/bidder', 'BidderController@bidder') ->middleware('is_bidder');
Route::post('/bidder/store', 'BidderController@store')
    ->middleware('is_bidder') 
    ->name('bidder.store');

Route::get('/admin', 'AdminController@admin') 
    ->middleware('is_admin')    
    ->name('admin');

Route::delete('/admin/{post}/destroyKonsumen', 'AdminController@destroyKonsumen')
    ->middleware('is_admin')    
    ->name('admin.destroyKonsumen');

Route::delete('/admin/{post}/destroyBidder', 'AdminController@destroyBidder')
    ->middleware('is_admin')    
    ->name('admin.destroyBidder');

Route::get('/konsumen', 'KonsumenController@konsumen') ->middleware('is_bidder');


Route::get('/profile', 'ProfileController@profile')->name('profile');


