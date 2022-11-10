<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Tipo_Equipo',
        'ID_Especificacion',
        'Nombre_Equipo',
    ];

}
