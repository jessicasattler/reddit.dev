@extends('layouts.master')

@section('title','Index')

@section('content')

	<form class="navbar-form navbar-left" role="search" action="{{ action('PostsController@searchTitle')}}" method= "GET">
      <div class="form-group">
        <input name= "title" type="text" class="form-control" placeholder="Search by post title">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

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