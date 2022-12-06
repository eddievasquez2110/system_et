<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso_Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre_Uso_Equipo',
    ];

    public function Especificacion_Equipo()
    {
        return $this->belongsTo(Especificacion_Equipo::class);
    }
    public function Especificacion_Software()
    {
        return $this->belongsTo(Especificacion_Software::class);
    }
}
