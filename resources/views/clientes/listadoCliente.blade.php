@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE CLIENTES
    </div>

    <table border="1">
    <tr>
        <td>DNI</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Domicilio</td>
        <td>Población</td>
        <td>Provincia</td>
        <td>Cp</td>
        <td>Teléfono</td>
        <td>E-mail</td>

    </tr>

    @foreach ($clientes as $cliente)
    <tr>
        <!--ponemos la ruta para que al pinchar en el dni, nos muestre los datos y  podamos actualizar el cliente-->
        <td><a href="{{route('clientes.edit',$cliente->id)}}">{{$cliente->Dni  }} </a> </td>
        <td>{{$cliente->Nombre   }}  </td>
        <td>{{ $cliente->Apellido   }}</td>
        <td>{{$cliente->Domicilio  }}</td>
        <td>  {{$cliente->Poblacion  }}</td>
        <td>  {{$cliente->Provincia  }}</td>
        <td>   {{$cliente->Cp         }}</td>
        <td>   {{$cliente->Telefono   }}</td>
        <td>  {{$cliente->Email      }}</td>

    </tr>
    @endforeach

@endsection
@section ("pie")

@endsection