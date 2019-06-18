<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected  $fillable=["Matricula", "Propietario", "Tipo", "Email", "Telefono", "Observacion", "Fecha", "Hora","Confirma"];

}
