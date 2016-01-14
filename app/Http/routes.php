<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
	
	Route::auth();
    Route::get('/', function() {
    	return view('welcome');
    });
    Route::get('/home', 'HomeController@index');

	Route::get('articles', 'ArticlesController@index');
	Route::get('articles/create', 'ArticlesController@create');
	Route::post('articles', 'ArticlesController@store');
	Route::patch('articles/{id}', 'ArticlesController@update');
	Route::get('articles/{id}/edit', 'ArticlesController@edit');
	Route::get('articles/{id}', 'ArticlesController@show');

    
});
