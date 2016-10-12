@extends('layouts.master')

@section('title','Edit')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', 1) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Name: <input class="form-control" type="text" name="name" value="{{ old('name') }}">
		E-mail: <input class="form-control" type="text" name="email"  value="{{ old('email') }}">
		Website: <input class="form-control" type="text" name="website" value="{{ old('website') }}">
		Comment: <textarea class="form-control" name="comment" rows="5" cols="40">{{ old('comment') }}</textarea>
		<input class="btn-success btn" type="submit">
	</form>

@stop 