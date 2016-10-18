<!-- resources/views/auth/login.blade.php -->
@extends('layouts.master')

@section('title','Login')

@section('content')
<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="/auth/login" class="form">
    {!! csrf_field() !!}

    <div>
        Email
        <input class = "form-control otherFont" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input class = "form-control otherFont" type="password" name="password" id="password">
    </div>

    <div>
        <input class = "form-control otherFont" type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button class="btn-success btn" type="submit">Login</button>
    </div>
</form>
@stop