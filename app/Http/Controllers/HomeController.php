<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return redirect()->action('HomeController@sayHello',array('Bob'));
    }

    public function sayHello($name = 'Jessica')
    {
    	$data = array('name'=>$name);
    	return view ('layouts.my-first-view')->with ($data);
    }
   
    public function showUpperCase($word = 'pretzel')
    {
	    $data = array('word' => $word,
					  'upperWord' => strtoupper($word));
		return view('layouts.uppercase')->with ($data);
    }

    public function showIncrement($number = 1)
    {
    	$data = array('number' => $number,
				  'incNumber' => $number + 1);
		return view('layouts.increment')->with ($data);
    }

    public function showRollDice($guess = 3)
    {
	    $min = 1;
	 	$max = 6;
	 	$random_number = rand ($min, $max );

	 	$data['dice_roll'] = $random_number;
	 	$data['guess'] = $guess;
	 	return view ('layouts.roll-dice')->with ($data);
    }

    public function add($a = 2, $b = 3)
    {
    	return $a + $b;
    }

}