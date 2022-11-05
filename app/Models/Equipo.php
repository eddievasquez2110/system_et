<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function tipo_equipos() {
        return $this->hasOne(Tipo_Equipo::class);
    }
}
