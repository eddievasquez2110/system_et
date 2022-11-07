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
        Schema::create('esp__disco_duros', function (Blueprint $table) {
            $table->id('ID_Esp_DiscoDuro');
            $table->string('CapacidadAlmacenamiento')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('InterfaceConexion')->nullable();
            $table->string('FuenteAlimentacion')->nullable();
            $table->string('PlataformaTrabajo')->nullable();
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
        Schema::dropIfExists('esp__disco_duros');
    }
};
