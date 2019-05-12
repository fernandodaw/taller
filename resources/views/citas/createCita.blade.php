@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
         INSERCION DE CITA
        </div>

   <form method="post" action="/citas">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" class="form-control" id="inputMatricula" placeholder="Matrícula"
                       name="Matricula" required>
                {{csrf_field()}}
            </div>
            <div class="form-group col-md-6">
                <label for="inputPropietario">Nombre</label>
                <input type="text" class="form-control" name="Propietario" id="inputPropietario" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputTipo">Tipo de reparación</label>
                <select id="inputTipo" class="form-control" name="Tipo">
                    <option selected>Selecciona una</option>
                    <option>Avería</option>
                    <option>Matenimiento periódico</option>
                    <option>ITV</option>
                </select>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputObservacion">Observación</label>
                    <input type="text" class="form-control" name="Observacion" id="inputObservacion">
                </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" id="inputTfno" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmai">Email</label>
                <input type="email" class="form-control"  name="Email" id="inputEmai" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTipo">Hora</label>
                <select id="inputTipo" class="form-control" name="Hora">
                    <option selected>Selecciona una</option>
                    <option>9:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>12:00</option>
                    <option>13:00</option>
                    <option>16:00</option>
                    <option>17:00</option>
                    <option>18:00</option>
                </select>
            </div>
        </div>

        <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
        </div>

            <!--   ***************calendario******************* -->
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>
                </div>
            </div>

            <!--  *****************Fin calendario*****************      -->





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

<!-- -->


@endsection
@section ("pie")

@endsection