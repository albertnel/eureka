<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Eureka @yield('title')</title>

        <link href="/css/all.css" rel="stylesheet">

        <script src="/js/all.js" type="text/javascript"></script>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Eureka</a>
                </div>

                @if (Auth::check())
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li @if (Request::is('admin/categories*')) class="active" @endif><a href="/admin/categories">Categories</a></li>
                            <li @if (Request::is('admin/libraries*')) class="active" @endif><a href="/admin/libraries">Libraries</a></li>
                            <li @if (Request::is('admin/exams*')) class="active" @endif><a href="/admin/exams">Exams</a></li>
                            <li @if (Request::is('admin/users*')) class="active" @endif><a href="/admin/users">Users</a></li>
                            <li><a href="/auth/logout">Logout</a>
                        </ul>
                    </div>
                @else
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/auth/login">Login</a>
                        </ul>
                    </div>
                @endif

            </div>

        </nav>

    	<div class="container">

    		@yield('header')

    		@yield('content')

    		@yield('footer')

    	</div>

    </body>

</html>
