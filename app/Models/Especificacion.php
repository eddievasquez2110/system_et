<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Tipo_Equipo',
        'ID_Uso_Equipo',
        'Nombre_Especificacion',
        'Especificacion',
    ];

    public function Tipo_Equipo(){
        return $this->hasOne(Tipo_Equipo::class);
    }

    public function Uso_Equipo()
    {
        return $this->HasOne(Uso_Equipo::class);
    }
}
