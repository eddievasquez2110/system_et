<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function tipo_equipo() {
        return $this->HasOne(Tipo_Equipo::class);
    }
    public function especificacion() {
        return $this->HasOne(Especificacion::class);
    }
    public function solicitud_detalle() {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
