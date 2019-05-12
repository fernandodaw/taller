@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
         INSERCION DE CLIENTES
        </div>


        <form method="post" action="/clientes">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDni">Dni</label>
                <input type="text" class="form-control" id="inputDni" placeholder="Letra mayúscula"
                       name="Dni" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" required>
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="inputNombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputApellido">Apellidos</label>
                <input type="text" class="form-control" name="Apellido" id="inputApellido" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDomicilio">Domicilio</label>
                <input type="text" class="form-control" name="Domicilio" id="inputDomicilio">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPoblacion">Población</label>
                <input type="text" class="form-control" name="Poblacion" id="inputPoblacion">
            </div>
            <div class="form-group col-md-4">
                <label for="inputProincia">Provincia</label>
                <input type="text" class="form-control" name="Provincia" id="inputProvincia">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCp">Código Postal</label>
                <input type="text" class="form-control" name="Cp" id="inputCp">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" id="inputTfno" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmai">Email</label>
                <input type="email" class="form-control"  name="Email" id="inputEmai" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Insertar</button>
    </form>

<!--
   <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
    <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
    </div>
  -->
        <!--
    <form method="post" action="/clientes">

    <table>
    <tr>
        <td>DNI:</td>
    <td>
        <input type="text" name="Dni" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))">
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
     <td>
    <input type="submit" name="enviar" value="Enviar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="Borrar">
      </td>
     </tr>
    </table>
    </form>
    -->
@endsection
@section ("pie")

@endsection