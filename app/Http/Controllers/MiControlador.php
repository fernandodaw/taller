<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Vehiculos;
use Illuminate\Support\Facades\Input;

//use PhpParser\Node\Stmt\Return;

class MiControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * CONTROLADOR DE CLIENTES
     * Contine todas las operaciones de control sobre la calse CLIENTES
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes=Cliente::all();
        return view("clientes.listadoCliente", compact("clientes"));
        //
    }

    /**
     * Show the form for creating a new resource.
     * Hace el llamamiento a la vista de crear Cliente, para la inserción de uno nuevo
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("clientes.createCliente");
        //
    }




    /**
     * Store a newly created resource in storage.
     *
     * Crea un cliente e inserta todos los datos en la base de datos,
     *  mediante la llamada a la VISTA createCliente.blade.php
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente=new Cliente;
        $cliente->Dni=$request->Dni;
        $cliente->Nombre=$request->Nombre;
        $cliente->Apellido=$request->Apellido;
        $cliente->Domicilio=$request->Domicilio;
        $cliente->Poblacion=$request->Poblacion;
        $cliente->Provincia=$request->Provincia;
        $cliente->Cp=$request->Cp;
        $cliente->Telefono=$request->Telefono;
        $cliente->Email=$request->Email;
      //  $cliente->vehiculo=$request->vehiculo;
        $cliente->save();

        return redirect("/clientes"); // Terminada la inserción nos muestra listado de clientes
    }

    /**
     * Display the specified resource.
     * Hace llamamiento a la vista para mostrar los datos del cliente y los vehiculos que tiene
     * le entra por parametro el identificador de cliente que es utilizado para localizar
     * los vehiculos que posee
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cliente=Cliente::findOrFail($id);
        $vehiculos = Cliente::find($id)->vehiculos;

        return view ("clientes.muestraCliente", compact("cliente"), compact("vehiculos"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Edición de un cliente por el id facilitado
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);

        return view ("clientes.editCliente", compact("cliente"));
        //
    }

    /**
     * Update the specified resource in storage.
     * Función para la actualización de datos de un cliente determinado
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $cliente=Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect("/clientes");
        //
    }

    /**
     * Remove the specified resource from storage.
     * Borrado de un cliente determinado por el id facilitado por parametro
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return redirect("/clientes");

        //
    }
}
