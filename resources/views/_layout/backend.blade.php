<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap 3 Admin</title>
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('css/backend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="" href="{{url('admin/dashboard')}}"><i
                                class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} </a>
                </li>
                <li><a href="{{url('/logout')}}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->

            <a href="{{url('/admin/dashboard')}}"><strong><i class="glyphicon glyphicon-list"></i> Dashboard
                    List</strong></a>

            <hr>
            <ul class="nav nav-stacked">
                <li class="active">
                    <a href="{{ url('admin/motorcycles') }}" target="ext">Motorcycles</a>
                </li>
                <li>
                    <a href="{{ url('admin/users') }}">Users</a>
                </li>
                {{--<li>--}}
                {{--<a href="http://bootstrapzero.com">BootstrapZero</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">
            @yield('body')
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a
            href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a></footer>
<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="{{asset('js/backend/bootstrap.min.js')}}"></script>
<script src="{{asset('js/backend/scripts.js')}}"></script>
</body>
</html>