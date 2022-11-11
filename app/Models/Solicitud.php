<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Fecha_Solicitud',
        'Estado_Solicitud',
    ];

    public function User()
    {
        return $this->HasOne(User::class);
    }

    public function SolicitudDetalle()
    {
        return $this->belongsTo(Solicitud_Detalle::class);
    }

}