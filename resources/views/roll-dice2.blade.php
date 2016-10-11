@extends('layouts.master')

@section('top-script')
	<title>Roll Dice</title>
@stop

<!-- double curly brackets means it will escape the html and just give text -->
@section('content')
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: {{$dice_roll}}</p>
	<p>Guess: {{ $guess }}</p>
	@if($correct)
		<p>You guessed correctly</p>
	@else
		<p>You guessed wrong</p>
	@endif
@stop

