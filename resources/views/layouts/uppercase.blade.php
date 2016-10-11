@extends('layouts.master')

@section('title','Uppercase')

@section('content')
	<h1>The Amazing UpperCaser Machine!</h1>
	<p>Your original word was: "{{ $word }}"</p>
	<p>The uppercase version is: "{{ $upperWord }}"</p>

	<a href="{{ action('HomeController@showIncrement') }}">Increment</a>
@stop

