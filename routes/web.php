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

Route::get('/', 'BarangController@index');
Route::get('/create', 'BarangController@add');
Route::post('/create','BarangController@create');
Route::get('/edit/{id}', 'BarangController@edit');
Route::put('/edit/{id}', 'BarangController@update');
Route::delete('/delete/{id}','BarangController@delete');




