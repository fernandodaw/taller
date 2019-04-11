<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>AREA TALLER</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<style>
/*
    .imagenCabecera{
        float: right;
        padding-right: 15px;
        width: 10px;
    }
       .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: Tahoma, Geneva, sans-serif;
            margin-bottom: 100px;
        }
 */       .contenido form, table{
            width: 300px;
            margin: 0 auto;
        }
        .pie{
            position: fixed;
            bottom: 10px;
            width: 100%;
            font-size: 2em;
            margin-bottom: 15px;
            text-align: center;
        }
</style>
</head>
<body>

<div class="cabecera">


@yield("cabecera")

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AREA TALLER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Taller <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vehículos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="Dropdown" aria-haspopup="true" aria-expanded="false">
                        Cliente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/clientes/create">Insertar</a>
                        <a class="dropdown-item" href="/clientes">Listado</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="Dropdown" aria-haspopup="true" aria-expanded="false">
                        Vehiculos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/vehiculos/create">Insertar</a>
                        <a class="dropdown-item" href="/vehiculos">Listado</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="Dropdown" aria-haspopup="true" aria-expanded="false">
                        Reparaciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/reparaciones/create">Insertar</a>
                        <a class="dropdown-item" href="/reparaciones">Listado</a>
                    </div>
                </li>

            </ul>

            <!--


                  <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
                 -->
            <a class="navbar-brand" href="#">
                <img src="\images\logo.jpg" width="30" height="30" alt="">
            </a>
        </div>
    </nav>




   <!-- <img src="\images\logo.jpg" class="imagenCabecera">-->
</div>


<div class="contenido">

    @yield("contenido")
</div>


<div class="pie">
    @yield("pie")



</div>




</body>
</html>
