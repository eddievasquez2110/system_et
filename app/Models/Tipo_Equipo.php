<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Tipo_Equipo',
        'Nombre_Tipo_Equipo',
        'Imagen',
        'Editor_Equipo'
    ];

    public function Especificacion_Equipos()
    {
        return $this->belongsTo(Especificacion_Equipo::class);
    }

    public function Solicitud_Detalle()
    {
        return $this->hasOne(Solicitud_Detalle::class);
    }
}
