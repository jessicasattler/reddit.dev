@extends('layouts.master')

@section('title','Show User')

@section('content')
{{-- 	@if (isset($user))
	<h1>Individual User</h1>
	<div class="container around">
		<h3>{{$user->name}}</h3>
		<p>{{$user->email}}</p>
		<hr>
		<h6>Created: {{$user->created_at->diffForHumans()}}</h6>
	</div>
	@endif --}}

 {{-- search form --}}

     <form class="form form-inline" role="search" action="{{ action('UsersController@searchUserName')}}" method= "GET">
      <div class="form-group">
        <input name= "name" type="text" class="form-control" placeholder="Search by user name">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

{{--     @if (isset($users)) --}}

	@foreach($users as $user)
		<div class="container around">
			<h3>{{$user->name}}</h3>
			<hr>
			<h6>Created : {{$user->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach

{{-- 	@endif --}}



@stop 