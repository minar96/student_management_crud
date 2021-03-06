<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Our Student Management Database</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">

  </head>
  <body>
    <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">#</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{route('index')}}">Home</a></li>
              <li><a href="{{route('create')}}">Create</a></li>
            </ul>


            @if(Auth::check())
            <li class="active"><a href="{{route('index')}}">Dashboard</a></li>
            @else
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="{{route('register')}}">Register</a></li>
              <li><a href="{{route('login')}}">login</a></li>
            </ul>
            @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div class="container">

        @yield('content')
      </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>

  </body>
</