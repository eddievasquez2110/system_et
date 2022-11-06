<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    public function usuario() {
        return $this->hasone(Usuario::class);
    }

    public function solicitud_detalle() {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
