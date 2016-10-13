@extends('layouts.master')

@section('title','Show Individual Post')

@section('content')
	<h1 style="color:Black;margin-left:30px;">Indvidual Post</h1>
	<div style = "background-color:#2F629B; color:white;margin-top:15px;"class="container">
		<h3>{{$posts->title}}</h3>
		<p>{{$posts->content}}</p>
	</div>

@stop 