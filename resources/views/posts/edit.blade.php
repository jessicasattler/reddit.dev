@extends('layouts.master')

@section('title','Edit')

@section('content')
    {{-- <h1 style="color:Black;margin-left:30px;">Edit A Post</h1> --}}
    <h1>Edit A Post</h1>
    <div class = "create">
        <form method="POST" action="{{ action('PostsController@update', $post->id) }}" class="form">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            Title: 
            
                <input class="form-control otherFont" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
            
            <br>
            Url:
        
                <input class="form-control otherFont" type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
           
            <br>
            Content:
         
                <textarea class="form-control otherFont"name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
         
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop