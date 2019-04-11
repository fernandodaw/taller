@extends ("../layouts.plantilla")

@section ("cabecera")
  INSERCION DE REPARACION
@endsection

@section ("contenido")

    <form method="post" action="/reparaciones">

    <table>
    <tr>
        <td>Veh_Id:</td>
        <td>
            <input type="text" name="vehiculo_id">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Rep_Matricula:</td>
    <td>
        <input type="text" name="Rep_Matricula">
            {{csrf_field()}}
    </td>
    </tr>


    <tr>
        <td>DNI:</td>
        <td>
            <input type="text" name="Rep_Dni">
        </td>
    </tr>

        <tr>
            <td>Km:</td>
            <td>
                <input type="text" name="Km">
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="Fecha">
            </td>
        </tr>

        <tr>
            <td>Observacion:</td>
            <td>
                <input type="text" name="Observacion">
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