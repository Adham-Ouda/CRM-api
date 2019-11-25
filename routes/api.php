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


// Customers

Route::post('customer/add', 'CustomerController@add');

Route::get('customer/view', 'CustomerController@index');

Route::get('customer/{id}/edit', 'CustomerController@edit');

Route::get('customer/{id}/delete', 'CustomerController@destroy');

Route::post('customer/{id}/update', 'CustomerController@update');

// Actions

Route::post('action/add', 'ActionController@add');

Route::get('action/{id}/view', 'ActionController@show');

Route::get('action/{id}/edit', 'ActionController@edit');

Route::get('action/{id}/delete', 'ActionController@destroy');

Route::post('action/{id}/update', 'ActionController@update');

