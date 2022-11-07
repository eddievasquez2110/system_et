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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('ID_Equipo');
            $table->unsignedBigInteger('ID_Tipo_Equipo');
            $table->foreign('ID_Tipo_Equipo')->references('ID_Tipo_Equipo')->on('tipo__equipos');
            $table->unsignedBigInteger('ID_Especificacion');
            $table->foreign('ID_Especificacion')->references('ID_Especificacion')->on('especificacions');
            $table->string('Nombre_Equipo',50);
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
        Schema::dropIfExists('equipos');
    }
};
