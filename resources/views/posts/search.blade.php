@extends('layouts.master')

@section('title','Index')

@section('content')

	<h1>Search Posts</h1>

		@foreach($posts as $post)
			<div class="container around">
				<h3>{{$post->title}}</h3>
				<p>{{$post->content}}</p>
				<hr>
				<h6>Created : {{$post->created_at->diffForHumans()}} by {{ $post->user->name }}</h6>
			</div>
		@endforeach

@stop