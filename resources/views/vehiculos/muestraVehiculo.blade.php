@extends ("../layouts.plantilla")

@section ("cabecera")
    vehiculo
@endsection

@section ("contenido")

    <table border="1">
    <tr>
        <td>cliente_id</td>
        <td>Matricula</td>
        <td>Marca</td>
        <td>Modelo</td>
    </tr>


    <tr>

        <td>{{$vehiculo->cliente_id   }}  </td>
        <td>{{ $vehiculo->Matricula  }}</td>
        <td>{{$vehiculo->Marca  }}</td>
        <td>  {{$vehiculo->MOdelo  }}</td>
    </tr>


@endsection
@section ("pie")

@endsection