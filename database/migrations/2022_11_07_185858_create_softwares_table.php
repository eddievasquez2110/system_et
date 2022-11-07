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
        Schema::create('softwares', function (Blueprint $table) {
            $table->id('ID_Software');
            $table->unsignedBigInteger('ID_Version');
            $table->foreign('ID_Version')->references('ID_Version')->on('versions');
            $table->unsignedBigInteger('ID_Especificacion_Software');
            $table->foreign('ID_Especificacion_Software')->references('ID_Especificacion_Software')->on('especificacion__softwares');
            $table->string('Nombre_Software',45);
            $table->string('Descripcion_Software',45);
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
