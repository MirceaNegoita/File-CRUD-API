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

Route::get('/create_product', 'ProductsController@create');
Route::post('/create_product', 'ProductsController@store');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/{id}', 'ProductsController@show');
Route::get('/products/edit/{id}', 'ProductsController@edit');
Route::put('/products/edit/{id}', 'ProductsController@update');
Route::delete('/products/{id}', 'ProductsController@destroy');
Route::get('/products/api/{id}','ProductsController@showApi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
