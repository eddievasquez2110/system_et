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
        Schema::create('esp__monitors', function (Blueprint $table) {
            $table->id('ID_Esp_Monitor');
            $table->string('TamañoPantalla',45)->nullable();
            $table->string('CamaraWebPantalla',45)->nullable();
            $table->string('MicrofonoPantalla',45)->nullable();
            $table->string('TipoPantalla',45)->nullable();
            $table->string('ResolucionPantalla',45)->nullable();
            $table->tinyInteger('PuertoHDMI')->nullable();
            $table->String('PuertoVGA',10)->nullable();
            $table->String('DisplayPort')->nullable();
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
        Schema::dropIfExists('esp__monitors');
    }
};
