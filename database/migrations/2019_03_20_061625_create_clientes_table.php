<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     * Contiene las columnas de la tabla Clientes de la BBDD
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("Dni")->unique();
            $table->string("Nombre");
            $table->string("Apellido");
            $table->string("Domicilio");
            $table->string("Poblacion");
            $table->string("Provincia");
            $table->string("Cp");
            $table->string("Telefono");
            $table->string("Email");

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
        Schema::dropIfExists('clientes');
    }
}
