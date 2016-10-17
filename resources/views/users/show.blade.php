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
{{-- 	@foreach($user >$posts as $post) --}}
		{{-- <div style = "background-color:#2F629B; color:white;margin-top:15px;" class="container around"> --}}
{{-- 		<div class="container around">
			<h3>{{$post->title}}</h3>
			<p>{{$post->content}}</p>
			<hr>
			<h6>Created : {{$post->created_at->diffForHumans()}} by {{ $post->user->name }}</h6>
		</div>
	@endforeach --}}



@stop 