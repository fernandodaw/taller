@extends ("../layouts.plantilla")

@section ("cabecera")
 EDITAR  VEHICULO
@endsection

@section ("contenido")

    <form method="post" action="/vehiculos/{{$vehiculo->id}}">

    <table>
    <tr>
        <td>cliente_id:</td>
    <td>
        <input type="text" name="cliente_id" value="{{$vehiculo->cliente_id}}">

            {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT"> <!-- esto es para la actualizacion de los campos que
                                                           laravel trabaja con PUT -->
    </td>
    </tr>


    <tr>
        <td>Matricula:</td>
        <td>
            <input type="text" name="Matricula" value="{{$vehiculo->Matricula}}">
        </td>
    </tr>

        <tr>
            <td>Marca:</td>
            <td>
                <input type="text" name="Marca" value="{{$vehiculo->Marca}}">
            </td>
        </tr>

        <tr>
            <td>Modelo:</td>
            <td>
                <input type="text" name="Modelo" value="{{$vehiculo->Modelo}}">
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
    <form method="post" action="/vehiculos/{{$vehiculo->id}}">

        {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    <input type="submit" value="Elimina registro">
    </form>


@endsection
@section ("pie")

@endsection