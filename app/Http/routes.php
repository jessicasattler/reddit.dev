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

//put in url reddit.dev/sayHello/jessica (or whichever name I want)
//best practice for urls is to use lowercase
//we can use dashes to separate words if we want
Route::get('/sayhello/{name?}', function($name = 'Lassen'){
	if($name == 'Chris'){
		return redirect('/');
	}
	return 'Hello '. $name;
});
