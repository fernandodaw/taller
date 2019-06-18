<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     * Contiene  los campos de la tabla CITAS.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');    // Campo autoincremental, clave primaria
            $table->string("Matricula");    // Campo matrícula del vehículo a citar
            $table->string("Propietario");  // Campo Propietario del vehículo a citar
            $table->string("Tipo");         // Campo Tipo de reparación a realizar al vehículo
            $table->string("Email");        // Campo Email del propietario si dispone
            $table->string("Telefono");     // Campo teléfono , obligatorio
            $table->text("Observacion");    // Campo que guarda información complementaria de la cita
            $table->date("Fecha");          // Campo Fecha de la cita solicitada
            $table->time("Hora");           // Campo Hora solicitada de la cita
            $table->boolean("Confirma");     // Indica si está o no confirmada la reserva
            $table->string("vehiculo_id");  //clave foranea relacionada con la id de Vehiculos
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
        Schema::dropIfExists('citas');
    }
}
