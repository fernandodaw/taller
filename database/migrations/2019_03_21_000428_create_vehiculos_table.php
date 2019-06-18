<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     * Contiene los registros de la tabla VEHICULOS de la base de datos
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');        // Clave primaria, autoincremental
            $table->string("cliente_id");       // Clave foranea de id de clientes
            $table->string("Matricula");        // Matrícula del vehículo
            $table->string("Marca");            // Marca del vehículo
            $table->string("Modelo");           // Modelo del vehículo
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
        Schema::dropIfExists('vehiculos');
    }
}
