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
            $table->id('ID_Solicitud_Detalle');
            $table->unsignedBigInteger('ID_Solicitud');
            $table->foreign('ID_Solicitud')->references('ID_Solicitud')->on('solicituds')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('ID_Especificacion_Equipo');
            $table->foreign('ID_Especificacion_Equipo')->references('ID_Especificacion_Equipo')->on('especificacion__equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('Cantidad_Equipo');
            $table->String('Descripcion_SolicitudDetalle', 45);
            //$table->Long('Proyecto',200);
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
        Schema::dropIfExists('solicitud__detalles');
    }
};
