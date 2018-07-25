<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css"/>
    <title>NBA</title>
    <link href="blog.css" rel="stylesheet">
</head>
<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav blog-nav">
                @if(auth()->check())
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                    <a class="nav-link ml-auto" href="/logout">Logout</a>
                @else
                    <a class="nav-link ml-auto" href="/login">Login</a>
                    <a class="nav-link ml-auto" href="/register">Register</a>
                @endif
            </nav>
        </div>
    </div>

    <div class="col-sm-8 blog-main">
        @yield('content')
    </div>
</body>
</html>