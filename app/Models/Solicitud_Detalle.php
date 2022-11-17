<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Detalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Software',
        'ID_Equipo',
        'ID_Software',
        'Descripcion_SolicitudDetalle',
    ];

    public function Solicitud()
    {
        return $this->HasOne(Solicitud::class);
    }

    public function Equipo()
    {
        return $this->HasOne(Equipo::class);
    }

    public function Software()
    {
        return $this->HasOne(Software::class);
    }
}
