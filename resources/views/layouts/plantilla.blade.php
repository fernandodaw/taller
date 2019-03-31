<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>base</title>

<style>
    .imagenCabecera{
        float: right;
        padding-right: 150px;
        width: 100px;
    }
    .cabecera{
        text-align: center;
        font-size: x-large;
        font-family: Tahoma, Geneva, sans-serif;
        margin-bottom: 100px;
    }
    .contenido form, table{
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
    <img src="\images\logo.jpg" class="imagenCabecera">
</div>


<div class="contenido">
    @yield("contenido")
</div>


<div class="pie">
    @yield("pie")

    AREA DE TALLER

</div>




</body>
</html>
