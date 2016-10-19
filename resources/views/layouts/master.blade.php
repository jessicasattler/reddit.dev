<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>@yield('title')</title>
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Taviraj" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Custom CSS -->
    <link href="/css/main.css" rel="stylesheet">

</head>
<body>
	{{-- @include('partials.navbar') --}}
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Reddit</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://reddit.dev/posts#">Blog <span class="sr-only">(current)</span></a></li>
        

      <ul class="nav navbar-nav navbar-right">
       
        @if (Auth::check()) 
      
          {{-- <li><a href="http://reddit.dev/users/1">Individual User</a></li> --}}
          {{-- the following displays the same as the top --}}
          <li><a href="{{ action('UsersController@show', array(Auth::user())) }}">Individual User</a></li>
          {{-- <li><a href="http://reddit.dev/posts/1">Individual Post</a></li> --}}
          <li><a href="{{ action('PostsController@show', array(Auth::id())) }}">Individual Post</a></li>
          {{-- <li><a href="http://reddit.dev/posts/4/edit">Edit Post</a></li> --}}
          <li><a href="{{ action('PostsController@edit', array(Auth::id())) }}">Edit Post</a></li>
          {{-- <li><a href="http://reddit.dev/posts/create">Create Post</a></li> --}}
          <li><a href="{{ action('PostsController@create', array(Auth::id())) }}">Create Post</a></li>


          {{-- <li><a href="http://reddit.dev/auth/logout">Logout</a></li> --}}

          <li><a href="{{ action('Auth\AuthController@getLogout')}}">Logout</a></li>

        @else 
      
          {{-- <li><a href="http://reddit.dev/auth/register">Register</a></li> --}}
          <li><a href="{{ action('Auth\AuthController@getRegister')}}">Register</a></li>

          {{-- <li><a href="http://reddit.dev/auth/login">Login</a></li> --}}
          <li><a href="{{ action('Auth\AuthController@getLogin')}}">Login</a></li>


        @endif

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	@if(session()->has('SUCCESS_MESSAGE'))
		<div class="alert alert-success">
			<p>{{session('SUCCESS_MESSAGE') }}</p>
		</div>
	@endif
	
	@if(session()->has('ERROR_MESSAGE'))
		<div class="alert alert-danger">
			<p>{{session('ERROR_MESSAGE') }}</p>
		</div>
	@endif

	<div class="container">  
   		 @yield('content')
    </div>

 <!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>Copyright &copy; Reddit 2016</p>
        </div>
    </div>
    <!-- /.row -->
</footer>
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>