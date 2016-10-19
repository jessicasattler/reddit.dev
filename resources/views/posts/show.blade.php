@extends('layouts.master')

@section('title','Show Individual Post')

@section('content')
	<h1>Individual Post</h1>
	{{-- <div class="container around">
		<h3>{{$posts->title}}</h3>
		<p>{{$posts->content}}</p>
		
		<p>{{$posts->user->name}}</p>
		<hr>
		<h6>Created: {{$posts->created_at->diffForHumans()}}</h6>
	</div> --}}

	@foreach ($posts as $post)
		<div class="container around">
			<h3>{{$post->title}}</h3>
			<p>{{$post->content}}</p>
			
			<p>{{$post->user->name}}</p>
			<hr>
			<h6>Created: {{$post->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach 

@stop 