@extends('layouts.master')

@section('title','Index')

@section('content')
	{{-- <h1 style="color:Black;margin-left:30px;">Blog</h1> --}}
	<h1>Blog</h1>
	@foreach($posts as $post)
		<div style = "background-color:#2F629B; color:white;margin-top:15px;"class="container">
			<h3>{{$post->title}}</h3>
			<p>{{$post->content}}</p>
			<hr>
			<h6>Created : {{$post->created_at->diffForHumans()}}</h6>
		</div>
	@endforeach

	{{-- for pagination --}}
	{!! $posts->render()!!}
@stop 