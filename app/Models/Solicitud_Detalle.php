<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Detalle extends Model
{
    use HasFactory;
    public function Solicitud() {
        return $this->hasOne(Solicitud::class);
    }

    public function Equipo() {
        return $this->hasOne(Equipo::class);
    }
}
