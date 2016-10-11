@extends('layouts.master')

@section('content')
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: {{ $dice_roll }}</p>
	<p>Guess:  {{ $guess }}</p>
	@if ($guess == $dice_roll)
		<p>You guessed correctly</p>
	@else
		<p>You got it wrong</p>
	@endif
@stop