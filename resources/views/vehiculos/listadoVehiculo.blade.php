@extends ("../layouts.plantilla")

@section ("cabecera")
         LISTADO DE VEHICULOS
@endsection

@section ("contenido")

    <table border="1">
    <tr>
        <td>cliente_id</td>
        <td>Matricula</td>
        <td>Marca</td>
        <td>Modelo</td>

    </tr>

    @foreach ($vehiculos as $vehiculo)
    <tr>
        <!--ponemos la ruta para que al pinchar en el id, nos muestre los datos y  podamos actualizar el vehiculo-->
        <td><a href="{{route('vehiculos.edit',$vehiculo->id)}}">{{$vehiculo->cliente_id }} </a> </td>

        <td>{{ $vehiculo->Matricula  }}</td>
        <td>{{$vehiculo->Marca  }}</td>
        <td>  {{$vehiculo->Modelo  }}</td>

    </tr>
    @endforeach

@endsection
@section ("pie")

@endsection