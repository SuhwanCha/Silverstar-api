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

Route::post('/search/get', 'SearchController@show');
Route::get('/search/history/get/{id}', 'SearchController@showHistory');
Route::post('/search/favorite/add', 'SearchController@putFavorite');
Route::get('/search/favorite/get/{id}', 'SearchController@getFavorite');

Route::post('/route/walk/get', 'RouteController@show');
Route::post('/route/bus/get', 'RouteController@showBus');
Route::post('/route/live', 'RouteController@live');
