<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }
    //Change your uppercase and increment routes to be controller actions within the HomeController
    public function showUpperCase($word = 'pretzel')
    {
	    $data = array('word' => $word,
					  'upperWord' => strtoupper($word));
		return view('layouts.uppercase')->with ($data);
    }

    

}