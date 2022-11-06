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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('ID_Usuario');
            $table->unsignedBigInteger('ID_Rol');
            $table->foreign('ID_Rol')->references('ID_Rol')->on('rols');
            $table->unsignedBigInteger('ID_Oficina');
            $table->foreign('ID_Oficina')->references('ID_Oficina')->on('oficinas');
            $table->string('Correo_Usuario',50);
            $table->string('Contrasenia_Usuario',50);
            $table->string('Estado_Usuario',30);
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
        Schema::dropIfExists('usuarios');
    }
};
