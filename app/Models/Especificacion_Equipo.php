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
        return $this->hasMany(Tipo_Equipo::class,'ID_Tipo_Equipo','Nombre_Tipo_Equipo');
    }

    public function uso__equipos()
    {
        return $this->HasOne(Uso_Equipo::class,'ID_Uso_Equipo','Nombre_Uso_Equipo');
    }
}
