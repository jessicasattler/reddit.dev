@extends('layouts.master')

@section('title','Create')

@section('content')
		<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		
		Content: <textarea class="form-control" name="content" rows="5" cols="40"> {{ old('content') }}</textarea>
		<input class="btn-success btn" type="submit">
	</form>

@stop 