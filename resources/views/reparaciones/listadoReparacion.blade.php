@extends ("../layouts.plantilla")

@section ("cabecera")
         LISTADO DE REPARACIONEs
@endsection

@section ("contenido")

    <table border="1">
    <tr>
        <td>id vehiculo</td>
        <td>matriculao</td>
        <td>dni</td>
        <td>km</td>
        <td>fecha</td>
        <td>observacion</td>

    </tr>

    @foreach ($reparaciones as $reparacion)
    <tr>
        <!--ponemos la ruta para que al pinchar en el dni, nos muestre los datos y  podamos actualizar la reparacion-->
        <td><a href="{{route('reparaciones.edit',$reparacion->id)}}">{{$reparacion->vehiculo_id  }} </a> </td>
        <td>{{$reparacion->Rep_Matricula   }}  </td>
        <td>{{ $reparacion->Rep_Dni   }}</td>
        <td>{{$reparacion->Km  }}</td>
        <td>  {{$reparacion->Fecha  }}</td>
        <td>  {{$reparacion->Observacion  }}</td>

    @endforeach

@endsection
@section ("pie")

@endsection