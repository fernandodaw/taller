@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
    EDITAR  CLIENTE
    </div>

    <form method="post" action="/clientes/{{$cliente->id}}">

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDni">Dni</label>
                <input type="text" name="Dni" value="{{$cliente->Dni}}">

                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputNombre">Nombre</label>
                <input type="text" class="form-control" name="Nombre" value="{{$cliente->Nombre}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputApellido">Apellidos</label>
                <input type="text" class="form-control" name="Apellido" value="{{$cliente->Apellido}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDomicilio">Domicilio</label>
                <input type="text" class="form-control" name="Domicilio" value="{{$cliente->Domicilio}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPoblacion">Población</label>
                <input type="text" class="form-control" name="Poblacion" value="{{$cliente->Poblacion}}">
            </div>
            <div class="form-group col-md-4">
                <label for="inputProincia">Provincia</label>
                <input type="text" class="form-control" name="Provincia" value="{{$cliente->Provincia}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCp">Código Postal</label>
                <input type="text" class="form-control" name="Cp" value="{{$cliente->Cp}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" value="{{$cliente->Telefono}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmai">Email</label>
                <input type="email" class="form-control"  name="Email" value="{{$cliente->Email}}">
            </div>
        </div>



    <button type="submit" class="btn btn-primary" name="Actualizar" value="Actualizar">Actualizar</button>
    </form>


    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/clientes/{{$cliente->id}}">
        {{csrf_field()}}
    <button type="submit" class="btn btn-primary" name="_method" value="DELETE">Eliminar registro</button>
    <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    </form>


@endsection
@section ("pie")

@endsection