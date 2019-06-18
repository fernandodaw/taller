<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     * Contiene los registros de la tabla Clientes de la BBDD
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');            //Clave primaria, autoincremental
            $table->string("Dni")->unique();        // DNI del cliente, campo único
            $table->string("Nombre");               // Nombre del cliente
            $table->string("Apellido");             //Apellido del cliente
            $table->string("Domicilio");            // Domicilio del cliente
            $table->string("Poblacion");            // Población del cliente
            $table->string("Provincia");            // Provincia del cliente
            $table->string("Cp");                   // Código postal del cliente
            $table->string("Telefono");             // Teléfono del cliente
            $table->string("Email");                // Email del cliente

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
