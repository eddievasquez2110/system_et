<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion_Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Tipo_Equipo',
        'ID_Uso_Equipo',
        'Nombre_Especificacion',
        'Especificacion',
    ];

    public function tipo__equipos(){
        return $this->hasOne(Tipo_Equipo::class);
    }

    public function Uso__Equipo()
    {
        return $this->HasOne(Uso_Equipo::class);
    }
}
