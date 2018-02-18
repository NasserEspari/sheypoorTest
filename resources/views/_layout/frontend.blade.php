<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>


    <link rel="stylesheet" href="{{asset('css/backend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Website</a>
        </div>
        @if(Auth::check())
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle=""
                           href="{{url('admin/dashboard')}}">
                            <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} </a>
                    </li>
                    <li><a href="{{url('/logout')}}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                </ul>
            </div>
        @else
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/login')}}"><i class="glyphicon glyphicon-lock"></i> Login</a></li>
                </ul>
            </div>
        @endif

    </div>
    <!-- /container -->
</div>
<!-- /Header -->


@yield('body')


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="{{asset('js/backend/bootstrap.min.js')}}"></script>
<script src="{{asset('js/backend/scripts.js')}}"></script>
</body>
</html>
