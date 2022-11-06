<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function Tipo_equipo() {
        return $this->HasOne(Tipo_Equipo::class);
    }
    public function Especificacion() {
        return $this->HasOne(Especificacion::class);
    }
    public function Solicitud_Detalle() {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
