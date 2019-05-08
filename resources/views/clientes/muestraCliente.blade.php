@extends ("../layouts.plantilla")

@section ("cabecera")
    CLIENTE
@endsection

@section ("contenido")

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


    <tr>
        <td>{{$cliente->Dni  }}  </td>
        <td>{{$cliente->Nombre   }}  </td>
        <td>{{ $cliente->Apellido   }}</td>
        <td>{{$cliente->Domicilio  }}</td>
        <td>  {{$cliente->Poblacion  }}</td>
        <td>  {{$cliente->Provincia  }}</td>
        <td>   {{$cliente->Cp         }}</td>
        <td>   {{$cliente->Telefono   }}</td>
        <td>  {{$cliente->Email      }}</td>

    </tr>


@endsection
@section ("pie")

@endsection