<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    
{{-- <style 
.container {
    background-color: black;
    margin-top: 15px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }
</style> --}}
</head>
<body>
	{{-- @include('partials.navbar') --}}

	{{-- <div class="container">   --}}
   		 @yield('content')
   {{--  </div> --}}

 {{--    @include('partials.footer') --}}
</body>
</html>