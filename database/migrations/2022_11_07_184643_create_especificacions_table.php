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
        Schema::create('especificacions', function (Blueprint $table) {
            $table->id('ID_Especificacion');
            $table->unsignedBigInteger('ID_Esp_Monitor')->nullable();
            $table->foreign('ID_Esp_Monitor')->references('ID_Esp_Monitor')->on('esp__monitors');
            $table->unsignedBigInteger('ID_Esp_Impresora_BlancoNegro')->nullable();
            $table->foreign('ID_Esp_Impresora_BlancoNegro')->references('ID_Esp_Impresora_BlancoNegro')->on('esp__impresora__blanco_negros');
            $table->unsignedBigInteger('ID_Esp_Impresora_Color')->nullable();
            $table->foreign('ID_Esp_Impresora_Color')->references('ID_Esp_Impresora_Color')->on('esp__impresora__colors');
            $table->unsignedBigInteger('ID_Esp_Proyector')->nullable();
            $table->foreign('ID_Esp_Proyector')->references('ID_Esp_Proyector')->on('esp__proyectors');
            $table->unsignedBigInteger('ID_PantallaInteractiva')->nullable();
            $table->foreign('ID_PantallaInteractiva')->references('ID_PantallaInteractiva')->on('esp__pantalla_interactivas');
            $table->unsignedBigInteger('ID_Esp_DiscoDuro')->nullable();
            $table->foreign('ID_Esp_DiscoDuro')->references('ID_Esp_DiscoDuro')->on('esp__disco_duros');
            $table->unsignedBigInteger('ID_Esp_Tablet')->nullable();
            $table->foreign('ID_Esp_Tablet')->references('ID_Esp_Tablet')->on('esp__tablets');
            $table->unsignedBigInteger('ID_Esp_Ordenador')->nullable();
            $table->foreign('ID_Esp_Ordenador')->references('ID_Esp_Ordenador')->on('esp__ordenadors');
            $table->string('Estado_Especificacion')->nullable();
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
        Schema::dropIfExists('especificacions');
    }
};
