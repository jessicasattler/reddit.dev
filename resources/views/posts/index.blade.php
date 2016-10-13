@extends('layouts.master')

@section('title','Index')

@section('content')
	<h1 style="color:Black;margin-left:30px;">Blog</h1>
	@foreach($posts as $post)
	<div style = "background-color:#2F629B; color:white;margin-top:15px;"class="container">
		<h3>{{$post->title}}</h3>
		<h6>{{$post->created_at}}</h6>
		<hr>
		<p>{{$post->content}}</p>
	</div>
	@endforeach
@stop 