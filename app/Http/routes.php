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

// Route::get('/', function () {
// 	//"." are like slashes, but we don't use slashes because this is not how it would work in pc's, the slashes are opposite in mac 
//     return view('layouts.my-first-view');
// });


Route:: get('/', 'HomeController@showWelcome');

// get('/dice/{guess}', HomeController@rollDice');

Route::get('/view', function () {
    return view('layouts.my-first-view');
});
// Route::get('/view', function (){
// 	$my_name = 'Jessica';
// 	$your_name = 'Fer';
// //preferred way of passing data to the view
// 	$data['my_name'] = $my_name;
// 	$data['your_name']= $your_name;
// 	return view ('my-first-view')->with ($data);

// //other ways that cameron does not like
// 	// return view ('my-first-view', $data);
// 	// return view ('my-first-view')->with('name', $name);

// });


Route::get('/rolldice/{guess?}', function ($guess = 1){
 	$min = 1;
 	$max = 6;
 	$random_number = rand ($min, $max );

 	$data['dice_roll'] = $random_number;
 	$data['guess'] = $guess;
 	// return view ('roll-dice')->with ($data);
 	return view ('layouts.roll-dice')->with ($data);
	});




//put in url reddit.dev/sayHello/jessica (or whichever name I want)
//best practice for urls is to use lowercase
//we can use dashes to separate words if we want
Route::get('/sayhello/{name?}', function($name = 'Lassen'){
	if($name == 'Chris'){
		return Redirect::to('/');
	}
	$data = array('name' => $name);
	return view('layouts.my-first-view')->with ($data);
});

//Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.

// Route::get('/uppercase/{word?}',function($word = 'codeup'){
// 	$data = array('word' => $word,
// 				  'upperWord' => strtoupper($word));
// 	return view('layouts.uppercase')->with ($data);
// });

Route::get('/uppercase/{word?}', 'HomeController@showUpperCase');

//Create a route at the path /increment that takes a parameter that is a number and returns the number plus one
Route::get('/increment/{number?}',function($number = 1){
	$data = array('number' => $number,
				  'incNumber' => $number + 1);
	return view('layouts.increment')->with ($data);
});
//route to add the two numbers given together
Route::get('/add/{a?}/{b?}', function($a = 2, $b = 3){
	return $a + $b;
});


