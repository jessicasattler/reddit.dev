@extends('layouts.master')

@section('title', 'Create New User')

@section('content')
	<h1 style="color:Black;margin-left:30px;">Create New User</h1>
	<div style = "background-color:white; color:black;margin-top:30px;margin-left:40px; margin-right:30px;">
		<form class="form" method="POST" action="{{ action('UsersController@store') }}">
			{!! csrf_field() !!}

			    @if($errors->has('name'))
	                <div class="alert alert-danger">
	                    {{ $errors->first('name') }}
	                </div>
	            @endif
			Name: <input class="form-control" type="text" name="name" value="{{ old('name') }}">

				@if($errors->has('email'))
					<div class="alert alert-danger">
						{{ $errors->first('email') }}
					</div>
				@endif
			Email: <input class="form-control" type="text" name="email" value="{{ old('email') }}">

				@if($errors->has('password'))
					<div class="alert alert-danger">
						{{ $errors->first('password') }}
					</div>
				@endif
			Password: <input class="form-control" type="password" name="password" value="{{ old('password') }}">
			<input class="btn-success btn" type="submit">
		</form>
	</div>
@stop 