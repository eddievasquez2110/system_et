<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso_Equipo extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "uso__equipos";
    public function Esp_Ordenador() {
        return $this->belongsTo(Esp_Ordenador::class);
=======

    protected $fillable = [
        'Nombre_Uso_Equipo',
    ];

    public function Especificacion()
    {
        return $this->belongsTo(Especificacion::class);
>>>>>>> 688564f22e811ba4aae8cf827a76e39917cf3332
    }
}
