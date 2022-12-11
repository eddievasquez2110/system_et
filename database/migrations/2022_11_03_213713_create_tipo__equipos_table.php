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
        Schema::create('Tipo__Equipos', function (Blueprint $table) {
            $table->id('ID_Tipo_Equipo');
            $table->string('Nombre_Tipo_Equipo');
            $table->string('Imagen');
            $table->string('Editor_Equipo');
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
        Schema::dropIfExists('tipo__equipos');
    }
};
