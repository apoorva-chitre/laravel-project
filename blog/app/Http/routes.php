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

	Route::get('/contact' , 'PagesController@contact');

	Route::get('articles' , 'ArticlesController@index');

	Route::get('articles/{article}' , 'ArticlesController@show' );


	Route::post('articles/{article}/comments' , 'CommentsController@store');


	Route::post('/contacts' , 'ContactsController@store');

	Route::get('/comments/{comment}/edit', 'CommentsController@edit');

	Route::patch('comments/{comment}', 'CommentsController@update');

});


Route::auth();

Route::get('/home', 'HomeController@index');
