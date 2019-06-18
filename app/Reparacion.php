<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{


    protected  $table="reparaciones"; // esto es para vincular con nuestra tabla de la BBDD ya que el plural lo hace en es

    /*campos que queremos permitir que se modifiquen al hacer la llamada del editReparacion.blader.php*/
    protected  $fillable=["vehiculo_id",  "Km", "Fecha", "Observacion", "Precio"];
}
