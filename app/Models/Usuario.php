<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function Rol() {
        return $this->hasOne(Rol::class);
    }
    public function Oficina() {
        return $this->hasOne(Oficina::class);
    }
    public function Solicitud(){
        return $this->belongsTo(Solicitud::class);
    }
}
