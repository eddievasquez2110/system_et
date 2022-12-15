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
        Schema::create('software', function (Blueprint $table) {
            $table->id('ID_Software');
            $table->unsignedBigInteger('ID_Uso_Equipo');
            $table->foreign('ID_Uso_Equipo')->references('ID_Uso_Equipo')->on('uso__equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('Nombre_Software',45);
            $table->string('Imagen');
            $table->string('Version_Software',45);
            $table->string('Descripcion_Software',250);
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
        Schema::dropIfExists('software');
    }
};
