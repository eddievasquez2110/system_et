<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartEquipo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tipoequipo(){
        return $this->belongsTo(Tipo_Equipo::class,'ID_Tipo_Equipo','ID_Tipo_Equipo');
    }
    public function usoequipo(){
        return $this->belongsTo(Uso_Equipo::class,'ID_Uso_Equipo','ID_Uso_Equipo');
    }
}
