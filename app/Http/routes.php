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
	//"." are like slashes, but we don't use slashes because this is not how it would work in pc's, the slashes are opposite in mac 
    return view('codeup.learning-laravel.my-first-view');
});

Route::get('/view', function () {
	//"." are like slashes, but we don't use slashes because this is not how it would work in pc's, the slashes are opposite in mac 
    return view('my-first-view');
});

Route::get('/view', function (){
	$my_name = 'Jessica';
	$your_name = 'Fer';
//preferred way of passing data to the view
	$data['my_name'] = $my_name;
	$data['your_name']= $your_name;
	return view ('my-first-view')->with ($data);

//other ways that cameron does not like
	// return view ('my-first-view', $data);
	// return view ('my-first-view')->with('name', $name);

});

// Route::get('/rolldice/{guess?}', function ($guess = 1){
// 	$min = 1;
// 	$max = 6;
// 	$random_number = rand ($min, $max );

// 	$data['random_number'] = $random_number;
// 	// return view ('roll-dice')->with ($data);

// 	if ($guess == $random_number){
// 		return view ('roll-dice')->with ($data)."Correct!";
// 	}else{
// 		return view ('roll-dice')->with ($data)."Try again";
// 	}
// });

//the correct way of doing the roll dice:
Route::get('/rolldice/{guess?}', function($guess = 1){
	$dice_roll = mt_rand(1,6);
	return ('roll-dice')->with('dice_roll', $dice_roll)});


})
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


