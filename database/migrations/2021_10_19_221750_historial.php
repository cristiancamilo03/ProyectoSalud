<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialClinico', function (Blueprint $table) {
            $table->bigIncrements('idHistorial');
            $table->string('NombrePaciente');
            $table->string('ApellidoPaciente');
            $table->string('EdadPaciente');
            $table->string('FechaHistorial');
            $table->string('DescripcionHistorial');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('FirmaPaciente');

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
        //
    }
}
