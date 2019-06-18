<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reparacion;
use App\Vehiculo;

class ControllerReparacion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * CONTROLADOR DE REPARACIONES
     *
     * Nos muestra un listado de todas los reparaciones que tenemos en la base de datos
     * hace una llamada a la vista "listadoReparaciones.blade.php"
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reparaciones=Reparacion::all();

        return view("reparaciones.listadoReparacion", compact("reparaciones"));
        //
    }

    /**
     * Show the form for creating a new resource.
     * Realiza un llamamiento s la vista "createReparacion" la cual, tras rellenar el formulario
     * nos manda a la función "store" para la inserción de datos en la base de datos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("reparaciones.createReparacion");

        //
    }

    /**
     * Store a newly created resource in storage.
     * Realiza la inserción de datos en la base de datos
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reparacion=new Reparacion;
        $reparacion->vehiculo_id=$request->vehiculo_id;
     //   $reparacion->Rep_Matricula=$request->Rep_Matricula;
        $reparacion->Km=$request->Km;
        $reparacion->Fecha=$request->Fecha;
        $reparacion->Observacion=$request->Observacion;
        $reparacion->Precio=$request->Precio;
        $reparacion->save();

        return redirect("/reparaciones");

        //
    }

    /**
     * Display the specified resource.
     * Función que muestra los datos de reparación de un vehículo
     * Realiza un llamamiento a la vista "muestraReparacion" para mostrar los datos
     * de la matricula y las reparaciones realizadas
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reparacion=Reparacion::findOrFail($id);
        $vehiculo= Vehiculo::findOrFail($reparacion->vehiculo_id);
        return view ("reparaciones.muestraReparacion", compact("reparacion","vehiculo"));

        //
    }

    /**
     * Show the form for editing the specified resource.
     * Función que fuestra un formulario para la posible edición de los datos de reparación
     * de un vehículo determinado por el identificado id que entra por parámetro.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reparacion=Reparacion::findOrFail($id);
        $vehiculo= Vehiculo::findOrFail($reparacion->vehiculo_id);
        return view ("reparaciones.editReparacion", compact("reparacion","vehiculo"));


        //
    }

    /**
     * Update the specified resource in storage.
     * Actualización de una reparación
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reparacion=Reparacion::findOrFail($id);
        $reparacion->update($request->all());

        return redirect("/reparaciones");

        //
    }

    /**
     * Remove the specified resource from storage.
     * Función para el borrado de un vehículo derminado por el identificador id
     * que le entra por parametro.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $reparacion=Reparacion::findOrFail($id);
        $reparacion->delete();
        return redirect("/reparaciones");
        //
    }
}
