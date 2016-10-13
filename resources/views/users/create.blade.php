@extends('layouts.master')

@section('title', 'Create New User')

@section('content')
	<h1 style="color:Black;margin-left:30px;">Create New User</h1>
	<div style = "background-color:#2F629B; color:white;margin-top:30px;margin-left:40px; margin-right:30px;">
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
				@if($errors->has('url'))
					<div class="alert alert-danger">
						{{ $errors->first('content') }}
					</div>
				@endif
			Content: <textarea class="form-control" name="content" rows="5" cols="40"> {{ old('content') }}</textarea>
			<input class="btn-success btn" type="submit">
		</form>
	</div>
@stop 