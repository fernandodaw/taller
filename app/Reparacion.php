<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{


    protected  $table="reparaciones"; // esto es para vincular con nuestra tabla de la BBDD ya que el plural lo hace en es
    protected  $fillable=["vehiculo_id", "Rep_Matricula", "Rep_Dni", "Km", "Fecha", "Observacion"];
}
