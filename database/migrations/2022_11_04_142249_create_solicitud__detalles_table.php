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
        Schema::create('solicitud__detalles', function (Blueprint $table) {
            $table->id('ID_SolicitudDetalle');
            //$table->foreignId('ID_Solicitud')->constrained()->cascadeOnDelete();
            //$table->foreignId('ID_Equipo')->constrained()->cascadeOnDelete();
            //$table->foreignId('ID_Software')->constrained()->cascadeOnDelete();
            $table->String('Descripcion_SolicitudDetalle', 45);
            $table->timestamps();
            //$table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud__detalles');
    }
};
