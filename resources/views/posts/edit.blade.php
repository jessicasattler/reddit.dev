@extends('layouts.master')

@section('title','Edit')

@section('content')
    <h1 style="color:Black;margin-left:30px;">Edit A Post</h1>
    <div style = "background-color:#2F629B; color:black;margin-top:40px;margin-left:40px; margin-right:40px;">
        <form method="POST" action="{{ action('PostsController@update', $post->id) }}" >
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            Title: <input type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
            <br>
            Url: <input type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
            <br>
            Content: <textarea name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop