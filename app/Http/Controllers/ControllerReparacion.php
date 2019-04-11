<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reparacion;

class ControllerReparacion extends Controller
{
    /**
     * Display a listing of the resource.
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("reparaciones.createReparacion");
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
        $reparacion=new Reparacion;
        $reparacion->vehiculo_id=$request->vehiculo_id;
        $reparacion->Rep_Matricula=$request->Rep_Matricula;
        $reparacion->Rep_Dni=$request->Rep_Dni;
        $reparacion->Km=$request->Km;
        $reparacion->Fecha=$request->Fecha;
        $reparacion->Observacion=$request->Observacion;


        $reparacion->save();



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
        $reparacion=Reparacion::findOrFail($id);

        return view ("reparaciones.muestraReparacion", compact("reparacion"));

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
        $reparacion=Reparacion::findOrFail($id);

        return view ("reparaciones.editReparacion", compact("reparacion"));


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
     *
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
