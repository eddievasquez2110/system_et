<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    public function SolicitudDetalle() {
        return $this->belongsTo(Solicitud_Detalle::class);
    }

    public function usuario() {
        return $this->hasOne(Usuario::class);
    }
}
