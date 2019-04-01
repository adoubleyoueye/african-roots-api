<?php

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

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');

Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
    // Route::resource('products', 'ProductController');
});

Route::get('admin/users', 'UserController@index');
Route::get('inventory', 'InventoryController@index');
Route::get('meals', 'MealController@index');
Route::post('meals', 'MealController@store');
Route::get('orders', 'OrderController@index');
Route::post('orders', 'OrderController@store');
Route::put('orders/{id}', 'OrderController@update');





