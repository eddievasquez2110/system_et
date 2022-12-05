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
        Schema::create('especificacion__equipos', function (Blueprint $table) {
            $table->id('ID_Especificacion_Equipo');
            $table->unsignedBigInteger('ID_Tipo_Equipo');
            $table->unsignedBigInteger('ID_Uso_Equipo');
            $table->foreign('ID_Tipo_Equipo')->references('ID_Tipo_Equipo')->on('Tipo__Equipos');
            $table->foreign('ID_Uso_Equipo')->references('ID_Uso_Equipo')->on('uso__equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->Text('Nombre_Especificacion_Equipo')->nullable();
            $table->Text('Especificacion_Equipo')->nullable();
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
        Schema::dropIfExists('especificacion__equipos');
    }
};
