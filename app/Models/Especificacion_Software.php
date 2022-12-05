<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion_Software extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Software',
        'ID_Uso_Equipo',
        'Nombre_Especificacion_Software',
        'Especificacion_Software',
    ];

    public function software()
    {
        return $this->belongsTo(Software::class,'ID_Software','Nombre_Software');
    }

    public function uso__equipos()
    {
        return $this->HasOne(Uso_Equipo::class,'ID_Uso_Equipo','Nombre_Uso_Equipo');
    }

    public function solicitud__detalles()
    {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
