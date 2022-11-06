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
            $table->string('Procesador_Esp',45);
            $table->string('MemoriaRAM_Esp',45);
            $table->string('DiscDuro_Esp',45);
            $table->string('TVideo_Esp',45);
            $table->string('SistemaOp_Esp',45);
            $table->string('VelocidadProc_Esp',45);
            $table->string('TamañoPantalla_Esp',45);
            $table->string('ResolucionPantalla_Esp',45);
            $table->string('CamaraWeb_Microfono_Esp',45);
            $table->tinyInteger('LectorTMemoria_Esp');
            $table->tinyInteger('PuertoRJ45_Esp');
            $table->tinyInteger('PuertoHDMI_Esp');
            $table->tinyInteger('PuertoUSB_Esp');
            $table->tinyInteger('Wifi_Esp');
            $table->tinyInteger('ConectBluetooth_Esp');
            $table->tinyInteger('PuertoC_Esp');
            $table->tinyInteger('SuiteInformatica_Esp');
            $table->tinyInteger('TecladoMouse_Esp');
            $table->String('Estado_Esp',30);
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
