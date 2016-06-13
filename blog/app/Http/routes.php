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

Route::group(['middleware' => ['web']] , function () {

	Route::get('/' , 'PagesController@home');


	Route::get('/about' , 'PagesController@about');

	Route::get('/contact' , ['as' => 'contact', 'uses' => 'PagesController@createcontact']);

	Route::post('/contact', ['as' => 'contact_store', 'uses' => 'PagesController@storecontact']);

	

	Route::auth();

	Route::get('/home', 'HomeController@index');


});

Route::group(['middleware' => ['auth']] , function () {

Route::get('articles' , 'ArticlesController@index');

	Route::any('articles/{article}' , 'ArticlesController@show' );


	Route::post('articles/{article}/comments' , 'CommentsController@store');

	Route::get('/comments/{comment}/edit', 'CommentsController@edit');

	Route::patch('comments/{comment}', 'CommentsController@update');

	Route::get('/articles/{article}/delete', 'ArticlesController@delete');

});


