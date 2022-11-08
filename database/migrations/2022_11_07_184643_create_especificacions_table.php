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
            $table->foreign('ID_Uso_Equipo')->references('ID_Uso_Equipo')->on('uso__equipos');
            $table->unsignedBigInteger('ID_Uso_Equipo');
            $table->string('Ord_Procesador',45)->nullable();
            $table->string('Ord_MemoriaRAM',45)->nullable();
            $table->string('Ord_DiscDuro',45)->nullable();
            $table->string('Ord_TVideo',45)->nullable();
            $table->string('Ord_SistemaOp',45)->nullable();
            $table->string('Ord_VelocidadProc',45)->nullable();
            $table->string('Ord_TamañoPantalla',45)->nullable();
            $table->string('Ord_CamaraWebMicrofono',45)->nullable();
            $table->tinyInteger('Ord_LectorTMemoria')->nullable();
            $table->tinyInteger('ord_PuertoRJ45')->nullable();
            $table->tinyInteger('Ord_PuertoHDMI')->nullable();
            $table->tinyInteger('Ord_PuertoUSB')->nullable();
            $table->tinyInteger('Ord_Wifi')->nullable();
            $table->tinyInteger('Ord_ConectBluetooth')->nullable();
            $table->tinyInteger('Ord_PuertoTipoC')->nullable();
            $table->tinyInteger('Ord_SuiteInformatica')->nullable();
            //ADD CPU
            $table->tinyInteger('Ord_PuertoHDMIyVGA_PuertoHDMIyDP')->nullable();
            $table->String('Ord_ConectBluetoothOpc',10)->nullable();
            $table->tinyInteger('Ord_TecladoMouse')->nullable();

            //monitor
            $table->string('Mon_TamañoPantalla',45)->nullable();
            $table->string('Mon_CamaraWebPantalla',45)->nullable();
            $table->string('Mon_MicrofonoPantalla',45)->nullable();
            $table->string('Mon_TipoPantalla',45)->nullable();
            $table->string('Mon_ResolucionPantalla',45)->nullable();
            $table->tinyInteger('Mon_PuertoHDMI')->nullable();
            $table->String('Mon_PuertoVGA',10)->nullable();
            $table->String('Mon_DisplayPort')->nullable();

            //impresora blanco y negro
            $table->string('ImpBn_Funciones')->nullable();
            $table->string('ImpBn_VelocidadImpresion')->nullable();
            $table->string('ImpBn_ImpBnTecnologiaImpresion')->nullable();
            $table->string('ImpBn_CalidadImpresion')->nullable();
            $table->string('ImpBn_LenguajeImpresion')->nullable();
            $table->string('ImpBn_DoblecaraImpre')->nullable();
            $table->string('ImpBn_Conectividad')->nullable();
            $table->string('ImpBn_MemoriaStandard')->nullable();
            $table->string('ImpBn_TamaniosSoporte')->nullable();
            $table->string('ImpBn_TipoEscaner')->nullable();

            //impresora a color
            $table->string('ImpColor_TecnologiaImpresion')->nullable();
            $table->string('ImpColor_InyeccionTinta')->nullable();
            $table->string('ImpColor_ResolucionMaxImpresion')->nullable();
            $table->string('ImpColor_Velocidad_Impresion')->nullable();
            $table->string('ImpColor_Copias')->nullable();
            $table->string('ImpColor_Escaneo')->nullable();
            $table->string('ImpColor_ConectividadTipo')->nullable();
            $table->string('ImpColor_SoportePapelSinPC')->nullable();
            $table->string('ImpColor_CapacidadCargaPapel')->nullable();

            //proyector
            $table->string('Proyec_Resolucion')->nullable();
            $table->string('Proyec_Tipo')->nullable();
            $table->string('Proyec_Brillo')->nullable();
            $table->string('Proyec_Conectividad')->nullable();
            $table->string('Proyec_RelacionAspecto')->nullable();
            $table->string('Proyec_PuertoHDMI')->nullable();
            $table->string('Proyec_PuertoVGA')->nullable();
            $table->string('Proyec_EntradaRJ45')->nullable();
            $table->string('Proyec_VidaUtilLampara')->nullable();

            //pantalla interactiva
            $table->string('PantInter_TamañoDiagonal')->nullable();
            $table->string('PantInter_Tipo')->nullable();
            $table->string('PantInter_AnguloVista')->nullable();
            $table->string('PantInter_Resolucion')->nullable();
            $table->string('PantInter_RatioContraste')->nullable();
            $table->string('PantInter_RelacionContraste')->nullable();
            $table->integer('PantInter_EntradaHDMI_VGA')->nullable();
            $table->Integer('PantInter_EntradaUSB')->nullable();
            $table->tinyInteger('PantInter_SalidaAudio')->nullable();
            $table->tinyInteger('PantInter_EntradaRS232')->nullable();
            $table->tinyInteger('PantInter_EntradaRJ45')->nullable();
            $table->tinyInteger('PantInter_Wifi')->nullable();
            $table->tinyInteger('PantInter_Bluetooth')->nullable();

            //disco duro
            $table->string('DiscDuro_CapacidadAlmacenamiento')->nullable();
            $table->string('DiscDuro_Tipo')->nullable();
            $table->string('DiscDuro_InterfaceConexion')->nullable();
            $table->string('DiscDuro_FuenteAlimentacion')->nullable();
            $table->string('DiscDuro_PlataformaTrabajo')->nullable();

            //tablets
            $table->string('Tablet_Pantalla')->nullable();
            $table->string('Tablet_Procesador')->nullable();
            $table->string('Tablet_MemoriaRAM')->nullable();
            $table->string('Tablet_MemoriaInterna')->nullable();
            $table->tinyInteger('Tablet_Bluetooth')->nullable();
            $table->string('Tablet_CamaraPrincipal')->nullable();
            $table->string('Tablet_CamaraFrontal')->nullable();

            $table->string('Estado_Especificacion',20);
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
