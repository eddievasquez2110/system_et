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
        Schema::create('esp__impresora__blanco_negros', function (Blueprint $table) {
            $table->id('ID_Esp_Impresora_BlancoNegro');
            $table->string('Funciones')->nullable();
            $table->string('VelocidadImpresion')->nullable();
            $table->string('TecnologiaImpresion')->nullable();
            $table->string('CalidadImpresion')->nullable();
            $table->string('LenguajeImpresion')->nullable();
            $table->string('DoblecaraImpre')->nullable();
            $table->string('Conectividad')->nullable();
            $table->string('MemoriaStandard')->nullable();
            $table->string('TamaniosSoporte')->nullable();
            $table->string('TipoEscaner')->nullable();
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
        Schema::dropIfExists('esp__impresora__blanco_negros');
    }
};
