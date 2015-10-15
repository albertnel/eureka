<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('libraries', 'LibrariesController@index');
Route::get('libraries/create', 'LibrariesController@create');
Route::get('libraries/{id}', 'LibrariesController@show');
Route::post('libraries', 'LibrariesController@store');
