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
            $table->unsignedBigInteger('ID_Uso_Equipo');
            $table->foreign('ID_Uso_Equipo')->references('ID_Uso_Equipo')->on('uso__equipos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->Text('Nombre_Especificacion_Software')->nullable();
            $table->Text('Especificacion_Software')->nullable();
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
