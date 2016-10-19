<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('title','Register')

@section('content')
<form method="POST" action="/auth/register" class = "form">
    {!! csrf_field() !!}

    <div>
        Name
        <input class="form-control otherFont" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input class="form-control otherFont" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input class="form-control otherFont" type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input class="form-control otherFont" type="password" name="password_confirmation">
    </div>
    <hr>
    <div>
        <button class="btn btn-primary" type="submit">Register</button>
    </div>
</form>
@stop