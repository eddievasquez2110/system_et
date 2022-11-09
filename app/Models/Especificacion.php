<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Ord_Procesador',
        'Ord_MemoriaRAM',
        'Ord_DiscDuro',
        'Ord_TVideo',
        'Ord_SistemaOp',
        'Ord_VelocidadProc',
        'Ord_TamañoPantalla',
        'Ord_CamaraWebMicrofono',
        'Ord_LectorTMemor',
        'ord_PuertoRJ',
        'Ord_PuertoHD',
        'Ord_PuertoU',
        'Ord_Wi',
        'Ord_ConectBluetoo',
        'Ord_PuertoTip',
        'Ord_SuiteInformati',
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

    ];
}
