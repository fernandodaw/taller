@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE CITAS
    </div>

    <table border="1">
    <tr>
        <td>Matrícula</td>
        <td>Nombre</td>
        <td>Tipo</td>
        <td>Email</td>
        <td>Teléfono</td>
        <td>Observación</td>
        <td>Fecha</td>
        <td>Hora</td>
        <td>Confirmación</td>

    </tr>

    @foreach ($citas as $cita)
    <tr>
        <!--ponemos la ruta para que al pinchar en la matricula, nos muestre los datos para actualizar-->
        <td><a href="{{route('citas.edit',$cita->id)}}">{{$cita->Matricula  }} </a> </td>

        <td>{{$cita->Propietario   }}</td>
        <td>{{$cita->Tipo   }}</td>
        <td>{{$cita->Email  }}</td>
        <td>{{$cita->Telefono  }}</td>
        <td>{{$cita->Observacion  }}</td>
        <td>{{$cita->Fecha   }}</td>
        <td>{{$cita->Hora    }}</td>
        <td>{{$cita->Confirma}}  </td>

    </tr>
    @endforeach

@endsection
@section ("pie")

@endsection