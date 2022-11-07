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
        Schema::create('esp__tablets', function (Blueprint $table) {
            $table->id('ID_Esp_Tablet');
            $table->string('Pantalla')->nullable();
            $table->string('Procesador')->nullable();
            $table->string('MemoriaRAM')->nullable();
            $table->string('MemoriaInterna')->nullable();
            $table->tinyInteger('Bluetooth')->nullable();
            $table->string('CamaraPrincipal')->nullable();
            $table->string('CamaraFrontal')->nullable();
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
        Schema::dropIfExists('esp__tablets');
    }
};
