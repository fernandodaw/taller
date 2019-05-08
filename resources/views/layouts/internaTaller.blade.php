<!doctype html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TALLER</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!--
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


    </style>
-->

</head>
<body>
<div class="cabecera">

    @yield("cabecera")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AREA </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Taller <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navCliente" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navCliente">
                    <a class="dropdown-item" href="/clientes/create">Insertar</a>
                    <a class="dropdown-item" href="/clientes">Listado</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navVehiculo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vehículos
                </a>
                <div class="dropdown-menu" aria-labelledby="navVehiculo">
                    <a class="dropdown-item" href="/vehiculos/create">Insertar</a>
                    <a class="dropdown-item" href="/vehiculos">Listado</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navReparaciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reparaciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navReparaciones">
                    <a class="dropdown-item" href="/reparaciones/create">Insertar</a>
                    <a class="dropdown-item" href="/reparaciones">Listado</a>
                </div>
            </li>


        </ul>


    </div>
</nav>



<div class="card" style="width: 18rem; margin:20px auto">
    <img class="card-img-top" src="\images\logo.jpg" alt="Card image cap  >
    <div class="card-body">
    </div>
</div>
</div>

<div class="flex-center position-ref ">

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">

            GESTIÓN   INTERNA
        </div>

        <div class="links">
  <!--          <a href="/clientes">Listado Clientes</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
   -->     </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}" ></script>
-->
</body>
</html>
