@extends('layouts.master')

@section('content')
	@if (isset($name))
		<h1>Hello, {{ $name }}!</h1>
	@else
		<h1>Welcome to Codeup...</h1>
		<p>Whoever you are</p>
	@endif
@stop