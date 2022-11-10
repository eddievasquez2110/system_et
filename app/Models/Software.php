<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Version',
        'ID_Especificacion_Software',
        'Nombre_Software',
        'Descripcion_Software',
    ];
}
