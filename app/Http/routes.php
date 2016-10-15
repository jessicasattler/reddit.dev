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
// Route:: get('/', 'HomeController@showWelcome');

// Route::get('/rolldice/{guess?}', 'HomeController@showRollDice');


// Route::get('/sayhello/{name?}', 'HomeController@sayHello');


// Route::get('/uppercase/{word?}', 'HomeController@showUpperCase');

// Route::get('/increment/{number?}', 'HomeController@showIncrement');

// Route::get('/add/{a?}/{b?}', 'HomeController@add');

// Route::resource('users','UsersController');

// Route::resource('posts', 'PostsController');

// Route::get('orm-test', function()
// {
// 	//test code here
// 	$post1 = new \App\Models\Post();
// 	$post1->title = 'Eloquent is awesome!';
// 	$post1->url='https://laravel.com/docs/5.1/eloquent';
// 	$post1->content  = 'It is super easy to create a new post.';
// 	$post1->created_by = 1;
// 	$post1->save();

// 	$post2 = new \App\Models\Post();
// 	$post2->title = 'Eloquent is really easy!';
// 	$post2->url='https://laravel.com/docs/5.1/eloquent';
// 	$post2->content = 'It is super easy to create a new post.';
// 	$post2->created_by = 1;
// 	$post2->save();
// });
Route::get('/', ['middleware'=>'auth'], function () {
    return redirect()->action('PostsController@index');
});


Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');