<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Estado_Solicitud',
        'Documento',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'id','id');
    }

    public function solicitud__detalles()
    {
        return $this->belongsTo(Solicitud_Detalle::class,'ID_Solicitud_detalle');
    }


}