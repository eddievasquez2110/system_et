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
        Schema::create('esp__proyectors', function (Blueprint $table) {
            $table->id('ID_Esp_Proyector');
            $table->string('Resolucion')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('Brillo')->nullable();
            $table->string('Conectividad')->nullable();
            $table->string('RelacionAspecto')->nullable();
            $table->string('PuertoHDMI')->nullable();
            $table->string('PuertoVGA')->nullable();
            $table->string('EntradaRJ45')->nullable();
            $table->string('VidaUtilLampara')->nullable();
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
        Schema::dropIfExists('esp__proyectors');
    }
};
