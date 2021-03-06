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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
	return view('home');
});

Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/exams', 'ExamsController');
Route::resource('admin/libraries', 'LibrariesController');
Route::resource('admin/users', 'UsersController');
Route::get('admin', function() { return view('admin/index'); });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
