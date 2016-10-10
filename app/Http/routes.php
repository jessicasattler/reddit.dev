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

//Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.

Route::get('/uppercase/{word?}',function($word = 'codeup'){
	return strtoupper($word);
});

//Create a route at the path /increment that takes a parameter that is a number and returns the number plus one
Route::get('/increment/{number?}',function($number = 1){
	return $number + 1;
});
//route to add the two numbers given together
Route::get('/add/{a?}/{b?}', function($a = 2, $b = 3){
	return $a + $b;
});


