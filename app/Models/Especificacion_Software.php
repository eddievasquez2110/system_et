<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacion_Software extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "especificacion__softwares";
=======

    protected $fillable = [
        'Procesador',
        'EspacioDisco',
        'SistemaOperativo',
        'MemoriaRAM',
        'TarjetaVideo',
    ];

    public function Software()
    {
        return $this->belongsTo(Software::class);
    }
>>>>>>> 688564f22e811ba4aae8cf827a76e39917cf3332
}
