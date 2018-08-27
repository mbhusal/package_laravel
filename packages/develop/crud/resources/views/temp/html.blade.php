<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

@if (Route::has('login'))

        @auth
        <a href="{{ url('/audit') }}">Home</a>
        @else


    <nav class="navbar navbar-expand-sm bg-light">

<div class="container">
        <a class="navbar-brand" href="{{route('create_data')}}">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('admin_login') }}">Log in</a>
                        <a class="dropdown-item" href="{{ route('admin_register') }}">Register</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">User</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('login_auth') }}">Log in</a>
                        <a class="dropdown-item" href="{{ route('auth_register') }}">Register</a>
                    </div>
                </li>
            </ul>
            <a href="{{ route('data_list') }}">View CRUD Data</a>

        </div>
</div>
</nav>


            @endauth
@endif

<div class="container" style="text-align: center">

        @yield('content')
    </div>

</body>
</html>