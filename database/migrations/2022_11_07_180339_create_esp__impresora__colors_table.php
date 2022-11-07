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
        Schema::create('esp__impresora__colors', function (Blueprint $table) {
            $table->id('ID_Esp_Impresora_Color');
            $table->string('TecnologiaImpresion')->nullable();
            $table->string('InyeccionTinta')->nullable();
            $table->string('ResolucionMaxImpresion')->nullable();
            $table->string('Velocidad_Impresion')->nullable();
            $table->string('Copias')->nullable();
            $table->string('Escaneo')->nullable();
            $table->string('ConectividadTipo')->nullable();
            $table->string('SoportePapelSinPC')->nullable();
            $table->string('CapacidadCargaPapel')->nullable();
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
        Schema::dropIfExists('esp__impresora__colors');
    }
};
