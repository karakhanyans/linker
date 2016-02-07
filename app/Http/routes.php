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

//Route::get('/', 'HomeController@index');
//Route::get('/auth/register', 'HomeController@index');

//Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('/', 'UsersController');
	Route::post('get_links','UsersController@get_links');
	Route::post('/link/save', 'LinksController@store');
	Route::delete('/link/delete/{id}', 'LinksController@destroy');
});
 Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
]);
