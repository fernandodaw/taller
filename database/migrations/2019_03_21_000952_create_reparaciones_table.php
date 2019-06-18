<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionesTable extends Migration
{
    /**
     * Run the migrations.
     * Contiene los registros de la tabla REPARACIONES de la base de datos
     * @return void
     */
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->bigIncrements('id');        // Campo id autoincremental, clave primaria
            $table->string("vehiculo_id");      // Campo id de vehículos, clave foranea
     //       $table->string("Rep_Matricula");
            $table->string("Km");               // Campo KM, para inserción de los km del vehículo
            $table->string("Fecha");            // Campo Fecha, para fecha realización de la reparación
            $table->string("Observacion");      // Campo Observación, para comentarios sobre la reparación
            $table->float("Precio");            // Campo Precio, para poner importe de la reparación
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparaciones');
    }
}
