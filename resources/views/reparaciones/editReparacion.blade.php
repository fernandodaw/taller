@extends ("../layouts.plantilla")

@section ("cabecera")
 EDITAR  REPARACION
@endsection

@section ("contenido")

    <form method="post" action="/reparaciones/{{$reparacion->id}}">

    <table>
    <tr>
        <td>vehiculo_id:</td>
    <td>
        <input type="text" name="vehiculo_id" value="{{$reparacion->vehiculo_id}}">

            {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT"> <!-- esto es para la actualizacion de los campos que
                                                           laravel trabaja con PUT -->
    </td>
    </tr>


    <tr>
        <td>MATRICULA:</td>
        <td>
            <input type="text" name="Rep_Matricula" value="{{$reparacion->Rep_Matricula}}">
        </td>
    </tr>

        <tr>
            <td>DNI:</td>
            <td>
                <input type="text" name="Rep_Dni" value="{{$reparacion->Rep_Dni}}">
            </td>
        </tr>

        <tr>
            <td>Km:</td>
            <td>
                <input type="text" name="Km" value="{{$reparacion->Km}}">
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="Fecha" value="{{$reparacion->Fecha}}">
            </td>
        </tr>

        <tr>
            <td>Observacion:</td>
            <td>
                <input type="text" name="Observacion" value="{{$reparacion->Observacion}}">
            </td>
        </tr>



     <tr>
     <td>
    <input type="submit" name="Actualizar" value="Actualizar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="Borrar campos">
      </td>
     </tr>
    </table>
    </form>


    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/reparaciones/{{$reparacion->id}}">

        {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    <input type="submit" value="Elimina registro">
    </form>


@endsection
@section ("pie")

@endsection