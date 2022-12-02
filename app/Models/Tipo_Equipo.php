<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre_Tipo_Equipo',
        'Imagen'
    ];

    public function Especificacion_Equipos()
    {
        return $this->belongsTo(Especificacion_Equipo::class);
    }
}
