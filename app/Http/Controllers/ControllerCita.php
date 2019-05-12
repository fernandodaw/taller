<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cita;

class ControllerCita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas=Cita::all();

        return view("citas.listadoCita", compact("citas"));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("citas.createCita");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cita=new Cita;
        $cita->Matricula=$request->Matricula;
        $cita->Propietario=$request->Propietario;
        $cita->Tipo=$request->Tipo;
        $cita->Email=$request->Email;
        $cita->Telefono=$request->Telefono;
        $cita->Observacion=$request->Observacion;
        $cita->Fecha=$request->Fecha;
        $cita->Hora=$request->Hora;
        $cita->Confirma=$request->Confirma;
        $cita->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cita=Cita::findOrFail($id);

        return view ("citas.muestraCita", compact("cita"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cita=Cita::findOrFail($id);

        return view ("citas.editCita", compact("cita"));
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
        //
        $cita=Cita::findOrFail($id);
        $cita->update($request->all());

        return redirect("/citas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cita=Cita::findOrFail($id);
        $cita->delete();
        return redirect("/citas");
    }
}
