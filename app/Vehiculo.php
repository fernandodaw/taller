<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected  $fillable=["cliente_id", "Matricula", "Marca", "Modelo"];
    //
}
