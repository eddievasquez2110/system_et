<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion_Software extends Model
{
    use HasFactory;

    protected $fillable = [

        'Procesador',
        'SistemaOperativo',
        'TamañoAlmacenamiento',
        'MemoriaRAM',
        'TarjetaVideo',
    ];

    public function Software()
    {
        return $this->belongsTo(Software::class);
    }
}
