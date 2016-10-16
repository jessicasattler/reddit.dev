@extends('layouts.master')

@section('title','Index')

@section('content')

	<h1>Blog Posts</h1>
	@foreach($posts as $post)
		{{-- <div style = "background-color:#2F629B; color:white;margin-top:15px;" class="container around"> --}}
		<div class="container around">
			<h3>{{$post->title}}</h3>
			<p>{{$post->content}}</p>
			<hr>
			<h6>Created : {{$post->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach

	{{-- for pagination --}}
	{!! $posts->render()!!}
@stop 