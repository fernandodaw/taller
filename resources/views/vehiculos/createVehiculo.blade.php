@extends ("../layouts.plantilla")

@section ("cabecera")
  INSERCION DE VEHICULOS
@endsection

@section ("contenido")

    <form method="post" action="/vehiculos">

    <table>
    <tr>
        <td>cliente_id:</td>
    <td>
        <input type="text" name="cliente_id">
            {{csrf_field()}}
    </td>
    </tr>


    <tr>
        <td>Matricula:</td>
        <td>
            <input type="text" name="Matricula">
        </td>
    </tr>

        <tr>
            <td>Marca:</td>
            <td>
                <input type="text" name="Marca">
            </td>
        </tr>

        <tr>
            <td>Modelo:</td>
            <td>
                <input type="text" name="Modelo">
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