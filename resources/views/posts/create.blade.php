@extends('layouts.master')

@section('title','Create')

@section('content')

	<h1>Create New Posts</h1>
	<div class = "create">
		<form class="form" method="POST" action="{{ action('PostsController@store') }}">
			{!! csrf_field() !!}
			    @if($errors->has('title'))
	                <div class="alert alert-danger">
	                    {{ $errors->first('title') }}
	                </div>
	            @endif
			Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
				@if($errors->has('url'))
					<div class="alert alert-danger">
						{{ $errors->first('url') }}
					</div>
				@endif
			Url: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
				@if($errors->has('content'))
					<div class="alert alert-danger">
						{{ $errors->first('content') }}
					</div>
				@endif
			Content: <textarea class="form-control" name="content" rows="5" cols="40"> {{ old('content') }}</textarea>
			<input class="btn-success btn" type="submit">
		</form>
	</div>

@stop 