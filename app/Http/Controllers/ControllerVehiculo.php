<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Vehiculo;
use Illuminate\Support\Facades\Input;

class ControllerVehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * CONTROLADOR DE VEHICULOS
     * El INDEX muestra un listado de los vehículos que hay en la base de datos haciendo un llamamiento
     * a la vista listadoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos=Vehiculo::all();


        return view("vehiculos.listadoVehiculo", compact("vehiculos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     * Función para la creación de un nuevo vehículo, realiza un llamamiento a la vista
     * createVehiculo que posteriormente llamara a la función store
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("vehiculos.createVehiculo");
        //
    }

    /**
     * Store a newly created resource in storage.
     *  Función para la creación de un vehículo, una vez realizada la inserción en la
     * base de datos nos direcciona a la vista que muestra un listado de todos los vehículos
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo=new Vehiculo();
        $vehiculo->cliente_id=$request->cliente_id;
        $vehiculo->Matricula=$request->Matricula;
        $vehiculo->Marca=$request->Marca;
        $vehiculo->Modelo=$request->Modelo;
        $vehiculo->save();
        return redirect("/vehiculos");
        //
    }

    /**
     * Display the specified resource.
     * Función que muestra un vehículo determinado, realiza una llamada a la vista muestraVehiculo
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);

        return view ("vehiculos.muestraVehiculo", compact("vehiculo"));

        //
    }

    /**
     * Show the form for editing the specified resource.
     * Función que realiza un llamamiento a la vista editVehiculo con los datos
     * de un vehículo determinado. Recibe por parametro el identificador del vehículo a editar
     * realiza una busqueda en la base de datos y los muestra en la vista correspondiente.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vehiculo=Vehiculo::findOrFail($id);

        return view ("vehiculos.editVehiculo", compact("vehiculo"));

        //
    }

    /**
     * Update the specified resource in storage.
     * Función para la actualización de un vehículo determinado.
     * Al finalizar nos redirige a la vista que lista todos los vehículos de la base de datos.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());

        return redirect("/vehiculos");

        //
    }

    /**
     * Remove the specified resource from storage.
     * Función para el borrado de un vehículo determinado.
     * Recibe por parametro el identificador del vehículo a borrar
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect("/vehiculos");
        //
    }
}
