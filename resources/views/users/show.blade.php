@extends('layouts.master')

@section('title','Show User')

@section('content')
	<h1>Individual User</h1>
	<div style = "background-color:#2F629B; color:white;margin-top:15px;"class="container">
		<h3>{{$users->name}}</h3>
		<p>{{$users->email}}</p>
		<hr>
		<h6>Created: {{$users->created_at->diffForHumans()}}</h6>
	</div>

@stop 