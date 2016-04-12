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

Route::get('/', 'Auth\AuthController@login');
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebookUser', 'Auth\AuthController@handleProviderCallback');

Route::group(['middleware' => ['auth','csrf']], function () {
	Route::resource('list', 'UsersController');
	Route::get('home', 'UsersController@index');
	Route::post('get_links','UsersController@get_links');
	Route::get('/link/get_links', 'LinksController@get_all_links');
	Route::delete('/link/delete/{id}', 'LinksController@destroy');
});
Route::post('/link/save', 'LinksController@store')->middleware(['auth']);
Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
]);
