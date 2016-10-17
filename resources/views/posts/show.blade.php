@extends('layouts.master')

@section('title','Show Individual Post')

@section('content')
	{{-- <h1 style="color:Black;margin-left:30px;">Indvidual Post</h1> --}}
	<h1>Individual Post</h1>
	<div class="container around">
		<h3>{{$posts->title}}</h3>
		<p>{{$posts->content}}</p>
		
		<p>{{$posts->user->name}}</p>
		<hr>
		<h6>Created: {{$posts->created_at->diffForHumans()}}</h6>
	</div>

@stop 