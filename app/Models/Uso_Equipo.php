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

    public function Esp_Ordenador() {
        return $this->belongsTo(Esp_Ordenador::class);
    }
}
