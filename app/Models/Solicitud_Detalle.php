<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Detalle extends Model
{
    use HasFactory;
    protected $table = 'solicitud__detalles';
    protected $fillable = [
        'ID_Solicitud',
        'ID_Tipo_Equipo',
        'ID_Uso_Equipo',
        'Cantidad_Equipo'
    ];

    public function solicituds()
    {
        return $this->HasOne(Solicitud::class,'ID_Solicitud','Fecha_Solicitud','Estado_Solicitud');
    }

    public function tipoequipos()
    {
        return $this->belongsTo(Tipo_Equipo::class,'ID_Tipo_Equipo','ID_Tipo_Equipo');
    }

    public function usoequipo()
    {
        return $this->belongsTo(Uso_Equipo::class,'ID_Uso_Equipo','ID_Uso_Equipo');
    }
}
