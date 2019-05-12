@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        INSERCION DE VEHICULOS
    </div>
<!--
    <div>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="INSERTA DNI DEL CLIENTE, o APELLIDO"> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search">BUSCAR</span>
            </button>
        </span>
        </div>
    </form>
    </div>
-->

    <div>
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
    </div>


<!--
    <div class="container">
        @if(isset($details))
            <p> Resultados que contienen <b> {{ $query }} </b> son :</p>
            <h2>Detalles</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Dni</th>
                    <th>Apellido</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $cliente)
                    <tr>
                        <td>{{$cliente->Dni}}</td>
                        <td>{{$cliente->Apellido}}</td>
                        <td>
                        <form action="/vehiculos/create" method="post" role="selct">
                            <input type="submit">
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    -->
@endsection
@section ("pie")

@endsection