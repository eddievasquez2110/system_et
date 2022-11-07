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
        Schema::create('esp__ordenadors', function (Blueprint $table) {
            $table->id('ID_Esp_Ordenador');
            $table->foreign('ID_Uso_Equipo')->references('ID_Uso_Equipo')->on('uso__equipos');
            $table->unsignedBigInteger('ID_Uso_Equipo');
            $table->string('Procesador',45)->nullable();
            $table->string('MemoriaRAM',45)->nullable();
            $table->string('DiscDuro',45)->nullable();
            $table->string('TVideo',45)->nullable();
            $table->string('SistemaOp',45)->nullable();
            $table->string('VelocidadProc',45)->nullable();
            $table->string('TamañoPantalla',45)->nullable();
            $table->string('CamaraWebMicrofono',45)->nullable();
            $table->tinyInteger('LectorTMemoria')->nullable();
            $table->tinyInteger('PuertoRJ45')->nullable();
            $table->tinyInteger('PuertoHDMI')->nullable();
            $table->tinyInteger('PuertoUSB')->nullable();
            $table->tinyInteger('Wifi')->nullable();
            $table->tinyInteger('ConectBluetooth')->nullable();
            $table->tinyInteger('PuertoTipoC')->nullable();
            $table->tinyInteger('SuiteInformatica')->nullable();
            //ADD CPU
            $table->tinyInteger('PuertoHDMIyVGA_PuertoHDMIyDP')->nullable();
            $table->String('ConectBluetoothOpc',10)->nullable();
            $table->tinyInteger('TecladoMouse')->nullable();
        
            $table->String('Estado_Esp',30)->nullable();
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
        Schema::dropIfExists('esp__ordenadors');
    }
};
