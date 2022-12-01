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
        'Imagen'
    ];

    public function Equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
