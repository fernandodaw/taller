<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     * crear los campos de la tabla citas
     * @return void
     */
    public function up()
    {
          Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("Matricula");
            $table->string("Propietario");
            $table->string("Tipo");
            $table->string("Email");
            $table->string("Telefono");
            $table->text("Observacion");
            $table->date("Fecha");
            $table->time("Hora");
            $table->boolean("Confirma");
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
