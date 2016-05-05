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

Route::get('/', 'WelcomeController@index');
 
Route::group(['middleware' => 'guest'], function(){
	Route::get('login', 'UserController@login');
	Route::post('check-login', 'UserController@checkLogin');
});	

Route::group(['middleware' => 'auth'], function(){
	Route::get('home', 'HomeController@index');
	Route::get('logout', 'UserController@logout');
	Route::get('posts', 'UserController@getPosts');
});

Route::group(['prefix' => '/api'], function () {
	Route::get('/products', 'UserController@getProducts');
});	