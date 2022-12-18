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
            $table->unsignedBigInteger('ID_Tipo_Equipo');
            $table->foreign('ID_Tipo_Equipo')->references('ID_Tipo_Equipo')->on('tipo__equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('Cantidad_Equipo');
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
