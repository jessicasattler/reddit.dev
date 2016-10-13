@extends('layouts.master')

@section('title','Edit')

@section('content')
    <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        Title: <input type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
        <br>
        Url: <input type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
        <br>
        Content: <textarea name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
@stop