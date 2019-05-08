<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Input;

//use PhpParser\Node\Stmt\Return;

class MiControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * Nos muestra un listado de todos los clientes que tenemos en la base de datos
     * hace una llamada a la vista "listadoClientes.blade.php"
     *
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
     *  mediante la llamada a la plantilla createCliente.blade.php
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
      //  return response()->json(array('success' => true, 'last_insert_id' => $cliente->id), 200);

    }

    /**
     * Display the specified resource.
     * Hace llamamiento a la vista para mostrar el cliente
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cliente=Cliente::findOrFail($id);

        return view ("clientes.muestraCliente", compact("cliente"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Edición de un cliente
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
     *
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
     *
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
