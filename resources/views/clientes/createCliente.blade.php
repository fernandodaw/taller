@extends ("../layouts.plantilla")

@section ("cabecera")
    INSERCION DE CLIENTES
@endsection

@section ("contenido")

    <form method="post" action="/clientes">

    <table>
    <tr>
        <td>DNI:</td>
    <td>
        <input type="text" name="Dni">
            {{csrf_field()}}
    </td>
    </tr>


    <tr>
        <td>Nombre:</td>
        <td>
            <input type="text" name="Nombre">
        </td>
    </tr>

        <tr>
            <td>Apellido:</td>
            <td>
                <input type="text" name="Apellido">
            </td>
        </tr>

        <tr>
            <td>Domicilio:</td>
            <td>
                <input type="text" name="Domicilio">
            </td>
        </tr>

        <tr>
            <td>Población:</td>
            <td>
                <input type="text" name="Poblacion">
            </td>
        </tr>

        <tr>
            <td>Provincia:</td>
            <td>
                <input type="text" name="Provincia">
            </td>
        </tr>

        <tr>
            <td>Código Postal:</td>
            <td>
                <input type="text" name="Cp">
            </td>
        </tr>

        <tr>
            <td>Teléfono:</td>
            <td>
                <input type="text" name="Telefono">
            </td>
        </tr>

        <tr>
            <td>Email:</td>
            <td>
                <input type="text" name="Email">
            </td>
        </tr>

        <tr>
            <td>Vehículo:</td>
            <td>
                <input type="text" name="vehiculo">
            </td>
        </tr>



     <tr>
     <td>
    <input type="submit" name="enviar" value="Enviar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="Borrar">
      </td>
     </tr>
    </table>
    </form>
@endsection
@section ("pie")

@endsection