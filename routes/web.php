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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Category Routing

Route::get('/create_category', 'CategoryController@create')->name('create_category');
Route::post('/create_category', 'CategoryController@create_category')->name('create_category');
Route::get('/category/{id}', 'CategoryController@show_category')->name('show_category');
Route::get('/delete/category/{id}', 'CategoryController@delete_category')->name('delete_category');

# Product Routing

Route::get('/product/add/{id}', 'ProductController@create')->name('create_product');
Route::post('/product/add/{id}', 'ProductController@create_product')->name('create_product');
