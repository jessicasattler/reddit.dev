@extends('layouts.master')

@section('title','Show User')

@section('content')
	<h1>Individual User</h1>
	<div class="container around">
		<h3>{{$user->name}}</h3>
		<p>{{$user->email}}</p>
		<hr>
		<h6>Created: {{$user->created_at->diffForHumans()}}</h6>
	</div>

@stop 