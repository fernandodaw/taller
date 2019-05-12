<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Esta funcion es un ejemplo de relación de uno a uno entre tablas
    /*
    public function  vehiculo(){
        return $this->hasOne("App\Vehiculo");
    }
    */

    /* esta funcion es para la relación existente entre la tabla  de las BBDD cliente y la tabla vehiculos
        es una relación de uno a muchos
    */
    public function  vehiculos(){
        return $this->hasMany("App\Vehiculo");
    }

    /*campos que queremos permitir que se modifiquen al hacer la llamada del editCliente.blader.php*/
    protected  $fillable=["Nombre", "Apellido", "Domicilio", "Poblacion", "Provincia", "Cp", "Telefono", "Email", "vehiculo"];
}
