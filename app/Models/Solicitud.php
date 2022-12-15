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

    public function users()
    {
        return $this->HasOne(User::class,'id');
    }

    public function solicitud__detalles()
    {
        return $this->belongsTo(Solicitud_Detalle::class,'ID_Solicitud_detalle');
    }


}