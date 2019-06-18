<?php

namespace App\Http\Controllers;


use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cita;        /* para la utilización de el modelo Cita */
use Carbon\Carbon;  /* para trabajar con fechas en laravel*/

$date= Carbon::now();     // $date , día actual
$date= $date->format('d-m-Y');          // formato de la fecha
$maniana= new Carbon('tomorrow');  // $maniana será el día de mañana

class ControllerCita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * CONTROLADOR DE LAS CITAS
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Nos mostrará las citas que estan pendientes de confirmación, es decir, solicitadas
        $citas=Cita::where('Confirma','=',0)->get();
        return view("citas.listadoCita", compact("citas"));


    }

    /**
     * Show the form for creating a new resource.
     * Función que muestra la vista "createCita" para la inserción de una cita nueva
     * Esta vista hará un llamamiento a la función "fecha" para el control de la fecha introducida,
     * posteriormente si la fecha es correcta llamara a la función "store"
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view ("citas.controlFecha");
       return view ("citas.createCita");
    }

    /**
     * Función para el control de la fecha insertada en el formulario de la vista "createCita"
     * Controlará si la fecha introducida es anterior al día de mañana y sí hay horarios
     * disponibles para el día seleccionado
     * @return \Illuminate\Http\Response
     */
    public function fecha(Request $request)
    {   $maniana= new Carbon();
        $maniana= Carbon::now();
        if (!empty($request->input('dia'))) {
        if ( $maniana->lte($request->input('dia'))) // si la fecha introducida es posterior a hoy
        {
            $horas = array('09:00:00','10:00:00','11:00:00','12:00:00','13:00:00','16:00:00','17:00:00','18:00:00');
            // CONSULTAR SI HAY HORARIO DISPONIBLE PARA ESE DIA
            $citaArchivos = Cita::where('Fecha','=',$request->input('dia'))->get(); // devuelve si hay día igual en la BBDD
            $horasOcupadas = [];
            foreach ($citaArchivos as $cita)
            {
                $horasOcupadas[] = $cita->getAttribute('Hora'); // horas de ese día en la BBDD
            }
            $disponibles = array_diff($horas,$horasOcupadas);//compara horas ocupadas con libres
            if (empty($disponibles))
            {
                return view ("citas.controlFecha")->with('fechaMala','Atención:No hay horas disponibles para este día.')->with('fechaC',$maniana)->with('fecha',$request->input('dia'));
            }
            if(count($citaArchivos) > 0)
            {
                  return view ("citas.createCita")->with('disponibles',$disponibles)->with('fecha',$request->input('dia')); //envia horas libres a la vista
                //return view ("citas.controlFecha")->with('disponibles',$disponibles);
            }
            if (count($citaArchivos)== 0) // para cuando todavía no se ha cogido hora en ese día
            {
                return view ("citas.createCita")->with('disponibles',$disponibles)->with('fecha',$request->input('dia')); //envia horas libres a la vista
            }

        }else{
            // manda el mensaje informando de error en la fecha
            return view ("citas.controlFecha")->with('fechaMala','Atención:La fecha no puede ser anterior al día de hoy.')->with('fechaC',$maniana)->with('fecha',$request->input('dia'));
        }} else {
            return view ("citas.controlFecha");
        }
    }


    /**
     * Store a newly created resource in storage.
     * Realiza la inserción de una cita nueva en la base de datos
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maniana= new Carbon();
      //  $maniana = Carbon::tomorrow();
        $maniana= Carbon::now();
        $cita=new Cita;

        $cita->Matricula=$request->Matricula;
        $cita->Propietario=$request->Propietario;
        $cita->Tipo=$request->Tipo;
        $cita->Email=$request->Email;
        $cita->Telefono=$request->Telefono;
        $cita->Observacion=$request->Observacion;
        $dia=$request->Fecha; //día introducido por el usuario para el registro en cita

        $cita->Fecha = $request->Fecha;
        $cita->Hora=$request->Hora;
        $cita->Confirma=$request->Confirma;

        $cita->save();

        return view ("citas.confirmaCita", compact("cita"));
    }

    /**
     * Display the specified resource.
     * Función que muestra una cita determinada por el identificado id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita=Cita::findOrFail($id);
        return view ("citas.muestraCita", compact("cita"));
    }

    /**
     * Show the form for editing the specified resource.
     * Función que muestra la vista "editCita" para la posible edición de sus campos
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
     * Función que permite la actualización de la cita determinada por el parametro id
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
     * Función que permite el borrado de una cita determinada por el parametro id
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
