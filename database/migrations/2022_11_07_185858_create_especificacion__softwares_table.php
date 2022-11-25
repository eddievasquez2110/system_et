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
        Schema::create('especificacion__software', function (Blueprint $table) {
            $table->id('ID_Especificacion_Software');
            $table->unsignedBigInteger('ID_Software');
            $table->foreign('ID_Software')->references('ID_Software')->on('software')->cascadeOnDelete()->cascadeOnUpdate();
            $table->String('Procesador')->nullable();
            $table->String('EspacioDisco')->nullable();
            $table->String('SistemaOperativo')->nullable();
            $table->String('TamañoARAM')->nullable();
            $table->String('TarjetaVideo')->nullable();
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
        Schema::dropIfExists('especificacion__software');
    }
};
