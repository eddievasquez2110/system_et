<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud__detalles', function (Blueprint $table) {
            $table->id('ID_SolicitudDetalle');
           /* $table->unsignedBigInteger('ID_Solicitud');
            $table->foreign('ID_Solicitud')->references('ID_Solicitud')->on('Solicituds');
            $table->unsignedBigInteger('ID_Equipo');
            $table->foreign('ID_Equipo')->references('ID_Equipo')->on('Equipos');*/
            $table->String('Descripcion_SolicitudDetalle', 45);
            $table->timestamps();
            //$table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud__detalles');
    }
};
