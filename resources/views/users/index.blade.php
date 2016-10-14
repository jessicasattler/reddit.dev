@extends('layouts.master')

@section('title','Index')

@section('content')
	<h1 style="color:Black;margin-left:30px;">All Users</h1>
	@foreach($users as $user)
		<div style = "background-color:#2F629B; color:white;margin-top:15px;"class="container">
			<h3>{{$user->name}}</h3>
			<p>{{$user->email}}</p>
			<hr>
			<h6>Created : {{$user->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach

	{{-- for pagination --}}
	{!! $users->render()!!}
@stop 