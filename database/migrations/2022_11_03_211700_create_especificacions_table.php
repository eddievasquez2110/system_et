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
        Schema::create('especificacions', function (Blueprint $table) {
            $table->id('ID_Especificacion');
            $table->string('Procesador_Esp');
            $table->string('MemoriaRAM_Esp');
            $table->string('DiscDuro_Esp');
            $table->string('TVideo_Esp');
            $table->string('SistemaOp_Esp');
            $table->string('VelocidadProc_Esp');
            $table->string('TamañoPantalla_Esp');
            $table->string('ResolucionPantalla_Esp');
            $table->string('CamaraWeb_Microfono_Esp');
            $table->integer('LectorTMemoria_Esp');
            $table->integer('PuertoRJ45_Esp');
            $table->integer('PuertoHDMI_Esp');
            $table->integer('PuertoUSB_Esp');
            $table->integer('Wifi_Esp');
            $table->integer('ConectBluetooth_Esp');
            $table->integer('PuertoC_Esp');
            $table->integer('SuiteInformatica_Esp');
            $table->integer('TecladoMouse_Esp');
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
        Schema::dropIfExists('especificacions');
    }
};
