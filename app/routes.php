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

#Category Routes
//Route::get('/category/{id}','CategoriesController@show');
//Route::get('/category','CategoriesController@index');

Route::resource('category','CategoriesController',
                array('only' => array('index','show'))
               );
