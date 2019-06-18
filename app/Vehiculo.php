<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    /* esta funcion es para la relación existente entre la tabla  de la BBDD reparacion y la tabla vehiculos
     es una relación de uno a muchos
 */
    public function  reparaciones(){
        return $this->hasMany("App\Reparacion");
    }

/*   para definir una relación inversa

    public function cliente(){
        return $this->belongsTo("App\Cliente");
    }
*/


    /*campos que queremos permitir que se modifiquen al hacer la llamada del editVehiculo.blader.php*/
    protected  $fillable=["cliente_id", "Matricula", "Marca", "Modelo"];
    //
}
