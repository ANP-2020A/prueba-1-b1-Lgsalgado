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



Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::delete('products/{product}', 'ProductsController@delete');
    Route::get('customers', 'CustomersController@index');
    Route::get('customers/{customer}', 'CustomersController@show');
    Route::post('customers', 'CustomersController@store');
    Route::put('customers/{customer}', 'CustomersController@update');
    Route::delete('customers/{customer}', 'CustomersController@delete');
    Route::post('products', 'ProductsController@store');
    Route::put('products/{product}', 'ProductsController@update');

});




