<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipo extends Model
{
    use HasFactory;
    protected $table = "Tipo__Equipos";
    public function Equipo() {
        return $this->belongsTo(Equipo::class);
    }
}
