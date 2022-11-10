<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fecha_Solicitud',
        'Estado_Solicitud',
    ];

    public function Usuario() {
        return $this->hasone(Usuario::class);
    }

    public function Solicitud_Detalle() {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
