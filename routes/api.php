<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'Api\BarangController@index');
Route::post('/', 'Api\BarangController@create');
Route::put('/edit/{id}', 'Api\BarangController@update');
Route::delete('/delete/{id}', 'Api\BarangController@delete');