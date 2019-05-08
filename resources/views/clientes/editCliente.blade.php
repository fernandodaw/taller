@extends ("../layouts.plantilla")

@section ("cabecera")
 EDITAR  CLIENTE
@endsection

@section ("contenido")

    <form method="post" action="/clientes/{{$cliente->id}}">

    <table>
    <tr>
        <td>DNI:</td>
    <td>
        <input type="text" name="Dni" value="{{$cliente->Dni}}">

            {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT"> <!-- esto es para la actualizacion de los campos que
                                                           laravel trabaja con PUT -->
    </td>
    </tr>


    <tr>
        <td>Nombre:</td>
        <td>
            <input type="text" name="Nombre" value="{{$cliente->Nombre}}">
        </td>
    </tr>

        <tr>
            <td>Apellido:</td>
            <td>
                <input type="text" name="Apellido" value="{{$cliente->Apellido}}">
            </td>
        </tr>

        <tr>
            <td>Domicilio:</td>
            <td>
                <input type="text" name="Domicilio" value="{{$cliente->Domicilio}}">
            </td>
        </tr>

        <tr>
            <td>Población:</td>
            <td>
                <input type="text" name="Poblacion" value="{{$cliente->Poblacion}}">
            </td>
        </tr>

        <tr>
            <td>Provincia:</td>
            <td>
                <input type="text" name="Provincia" value="{{$cliente->Provincia}}">
            </td>
        </tr>

        <tr>
            <td>Código Postal:</td>
            <td>
                <input type="text" name="Cp" value="{{$cliente->Cp}}">
            </td>
        </tr>

        <tr>
            <td>Teléfono:</td>
            <td>
                <input type="text" name="Telefono" value="{{$cliente->Telefono}}">
            </td>
        </tr>

        <tr>
            <td>Email:</td>
            <td>
                <input type="text" name="Email" value="{{$cliente->Email}}">
            </td>
        </tr>

        <tr>
            <td>Vehículo:</td>
            <td>
                <input type="text" name="vehiculo" value="{{$cliente->vehiculo}}">
            </td>
        </tr>



     <tr>
     <td>
    <input type="submit" name="Actualizar" value="Actualizar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="BorrarCampos">
      </td>
     </tr>
    </table>
    </form>


    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/clientes/{{$cliente->id}}">

        {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    <input type="submit" value="Elimina registro">
    </form>


@endsection
@section ("pie")

@endsection