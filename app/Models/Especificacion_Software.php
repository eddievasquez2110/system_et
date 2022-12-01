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
        'Nombre_Especificacion',
        'Especificacion',
    ];

    public function Software()
    {
        return $this->belongsTo(Software::class);
    }

    public function Uso_Equipo()
    {
        return $this->HasOne(Uso_Equipo::class);
    }
}
