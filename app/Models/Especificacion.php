<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Uso_Equipo',
        'Ord_Procesador',
        'Ord_MemoriaRAM',
        'Ord_DiscDuro',
        'Ord_TVideo',
        'Ord_SistemaOp',
        'Ord_VelocidadProc',
        'Ord_TamañoPantalla',
        'Ord_CamaraWebMicrofono',
        'Ord_LectorTMemoria',
        'ord_PuertoRJ45',
        'Ord_PuertoHDMI',
        'Ord_PuertoUSB',
        'Ord_Wifi',
        'Ord_ConectBluetooth',
        'Ord_PuertoTipoC',
        'Ord_SuiteInformatica',
        //ADD CPU
        'Ord_PuertoHDMIyVGA_PuertoHDMIyDP',
        'Ord_ConectBluetoothOpc',
        'Ord_TecladoMouse',

        //monitor
        'Mon_TamañoPantalla',
        'Mon_CamaraWebPantalla',
        'Mon_MicrofonoPantalla',
        'Mon_TipoPantalla',
        'Mon_ResolucionPantalla',
        'Mon_PuertoHDMI',
        'Mon_PuertoVGA',
        'Mon_DisplayPort',

        //impresora blanco y negro
        'ImpBn_Funciones',
        'ImpBn_VelocidadImpresion',
        'ImpBn_ImpBnTecnologiaImpresion',
        'ImpBn_CalidadImpresion',
        'ImpBn_LenguajeImpresion',
        'ImpBn_DoblecaraImpre',
        'ImpBn_Conectividad',
        'ImpBn_MemoriaStandard',
        'ImpBn_TamaniosSoporte',
        'ImpBn_TipoEscaner',

        //impresora a color
        'ImpColor_TecnologiaImpresion',
        'ImpColor_InyeccionTinta',
        'ImpColor_ResolucionMaxImpresion',
        'ImpColor_Velocidad_Impresion',
        'ImpColor_Copias',
        'ImpColor_Escaneo',
        'ImpColor_ConectividadTipo',
        'ImpColor_SoportePapelSinPC',
        'ImpColor_CapacidadCargaPapel',

        //proyector
        'Proyec_Resolucion',
        'Proyec_Tipo',
        'Proyec_Brillo',
        'Proyec_Conectividad',
        'Proyec_RelacionAspecto',
        'Proyec_PuertoHDMI',
        'Proyec_PuertoVGA',
        'Proyec_EntradaRJ45',
        'Proyec_VidaUtilLampara',

        //pantalla interactiva
        'PantInter_TamañoDiagonal',
        'PantInter_Tipo',
        'PantInter_AnguloVista',
        'PantInter_Resolucion',
        'PantInter_RatioContraste',
        'PantInter_RelacionContraste',
        'PantInter_EntradaHDMI_VGA',
        'PantInter_EntradaUSB',
        'PantInter_SalidaAudio',
        'PantInter_EntradaRS232',
        'PantInter_EntradaRJ45',
        'PantInter_Wifi',
        'PantInter_Bluetooth',

        //disco duro
        'DiscDuro_CapacidadAlmacenamiento',
        'DiscDuro_Tipo',
        'DiscDuro_InterfaceConexion',
        'DiscDuro_FuenteAlimentacion',
        'DiscDuro_PlataformaTrabajo',

        //tablets
        'Tablet_Pantalla',
        'Tablet_Procesador',
        'Tablet_MemoriaRAM',
        'Tablet_MemoriaInterna',
        'Tablet_Bluetooth',
        'Tablet_CamaraPrincipal',
        'Tablet_CamaraFrontal',

        'Estado_Especificacion',
    ];

    public function Uso_Equipo()
    {
        return $this->HasOne(Uso_Equipo::class);
    }

    public function Equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
