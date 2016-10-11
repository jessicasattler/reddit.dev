@extends('layouts.master')

@section('content')
	<h1>The Amazing Incrementer Machine!</h1>
	<p>Your original number was: "{!! $number !!}"</p>
	<p>The incremented number is: "{!! $incNumber !!}"</p>
@stop