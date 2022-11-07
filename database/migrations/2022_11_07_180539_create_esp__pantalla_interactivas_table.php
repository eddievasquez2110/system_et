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
        Schema::create('esp__pantalla_interactivas', function (Blueprint $table) {
            $table->id('ID_PantallaInteractiva');
            $table->string('TamañoDiagonal')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('AnguloVista')->nullable();
            $table->string('Resolucion')->nullable();
            $table->string('RatioContraste')->nullable();
            $table->string('RelacionContraste')->nullable();
            $table->integer('EntradaHDMI_VGA')->nullable();
            $table->Integer('EntradaUSB')->nullable();
            $table->tinyInteger('SalidaAudio')->nullable();
            $table->tinyInteger('EntradaRS232')->nullable();
            $table->tinyInteger('EntradaRJ45')->nullable();
            $table->tinyInteger('Wifi')->nullable();
            $table->tinyInteger('Bluetooth')->nullable();
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
        Schema::dropIfExists('esp__pantalla_interactivas');
    }
};
