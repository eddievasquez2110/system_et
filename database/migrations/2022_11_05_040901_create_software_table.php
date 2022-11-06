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
            // $table->foreignId('ID_Version')->constrained('ID_Version')->cascadeOnDelete('ID_Version');
            $table->unsignedBigInteger('ID_Version');
            $table->foreign('ID_Version')->references('ID_Version')->on('versions');
            $table->unsignedBigInteger('ID_Especificacion');
            $table->foreign('ID_Especificacion')->references('ID_Especificacion')->on('especificacions');
            $table->string('Name_Software');
            $table->string('Descripcion_Software');
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
