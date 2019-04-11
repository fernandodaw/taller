<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class ControllerVehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("vehiculos.createVehiculo");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
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

        //
    }

    /**
     * Display the specified resource.
     *
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
     *
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
     *
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
     *
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
