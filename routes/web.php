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

Route::get('/profile', 'ProfileController@profile')->name('profile');

Route::get('/index', 'IndexController@index')->name('home');

// Route::get('/index', function () {
//     return view('index');
//     // return view('welcome');
// });
Auth::routes();

Route::get('/about', 'AboutController@about');

Route::get('/products', 'ProductsController@products');
