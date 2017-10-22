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
Route::GET('buku/search','BukuController@search');
Route::resource('buku','BukuController');
Route::resource('distributor','DistributorController');
Route::resource('kasir','KasirController');
Route::resource('pasok','PasokController');
Route::resource('penjualan','PenjualanController');
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
