<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ItemsController@index');
Route::get('add', 'ItemsController@add');
Route::post('add', 'ItemsController@store');
Route::get('delete', 'ItemsController@delete');
Route::post('delete', 'ItemsController@postDelete');
Route::get('/about', 'ItemsController@about');
Route::get('/{id}', 'ItemsController@showByCategory');
