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

//"Route::"" is optional
Route:: get('/', 'HomeController@showWelcome');

Route::get('/rolldice/{guess?}', 'HomeController@showRollDice');


Route::get('/sayhello/{name?}', 'HomeController@sayHello');


Route::get('/uppercase/{word?}', 'HomeController@showUpperCase');

Route::get('/increment/{number?}', 'HomeController@showIncrement');

Route::get('/add/{a?}/{b?}', 'HomeController@add');

Route::resource('posts', 'PostsController');
