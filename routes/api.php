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
Route::resource('meals', 'MealController');
// Route::get('meals', 'MealController@index');
Route::post('meals', 'MealController@store');
Route::get('meals/{id}', 'MealController@show');
Route::put('meals/{meal}', 'MealController@update');
Route::delete('meals/{meal}', 'MealController@delete');
Route::get('meals', array('middleware' => 'cors', 'uses' => 'MealController@index'));
