<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public function  vehiculo(){
        return $this->hasOne("App\Vehiculo");
    }

    public function  vehiculos(){
        return $this->hasMany("App\Vehiculo");
    }

    /*campos que queremos permitir que se modifiquen al hacer la llamada del editCliente.blader.php*/
    protected  $fillable=["Nombre", "Apellido", "Domicilio", "Poblacion", "Provincia", "Cp", "Telefono", "Email", "vehiculo"];
}
