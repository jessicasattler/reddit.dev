@extends('layouts.master')

@section('title','Create')

@section('content')
	<h1 style="color:Black;margin-left:30px;">Create New Post</h1>
	<div style = "background-color:#2F629B; color:white;margin-top:40px;margin-left:40px; margin-right:40px;"
		<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		
		Content: <textarea class="form-control" name="content" rows="5" cols="40"> {{ old('content') }}</textarea>
		<input class="btn-success btn" type="submit">
	</form>
</div>
@stop 