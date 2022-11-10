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
            $table->unsignedBigInteger('ID_Solicitud');
            $table->foreign('ID_Solicitud')->references('ID_Solicitud')->on('solicituds')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('ID_Equipo');
            $table->foreign('ID_Equipo')->references('ID_Equipo')->on('equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('ID_Software');
            $table->foreign('ID_Software')->references('ID_Software')->on('softwares')->cascadeOnDelete()->cascadeOnUpdate();
            $table->String('Descripcion_SolicitudDetalle', 45);
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
