@extends('layouts.master')

@section('title','Index')

@section('content')

	
		<h3>{{$posts->title}}</h3>
		<p>{{$posts->content}}</p>

@stop 