@extends('layouts.master')

@section('title','Show User')

@section('content')

 {{-- search form for username --}}

     <form class="form form-inline" role="search" action="{{ action('UsersController@searchUserName')}}" method= "GET">
      <div class="form-group">
        <input name= "name" type="text" class="form-control" placeholder="Search by user name">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>



	@foreach($users as $user)
		<div class="container around">
			<h3>{{$user->name}}</h3>
			<hr>
			<h6>Created : {{$user->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach
{{-- {!! $users->appends(['searchUserName'=> Request::get('name')])->render()!!} --}}
@stop 