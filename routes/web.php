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

Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori', 'KategoriController@store');
Route::get('/kategori/{id}', 'KategoriController@edit');
Route::post('/kategori/{id}', 'KategoriController@update');
Route::get('/kategori/{id}/del', 'KategoriController@destroy');

Route::get('/postingan', 'PostinganController@index');
Route::get('/postingan/create', 'PostinganController@create');
Route::post('/postingan', 'PostinganController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
