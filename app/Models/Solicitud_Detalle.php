<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Detalle extends Model
{
    use HasFactory;
    protected $table = 'solicitud__detalles';
    protected $fillable = [
        'ID_Solicitud',
        'ID_Tipo_Equipo',
        'ID_Software'
    ];

    public function solicituds()
    {
        return $this->HasOne(Solicitud::class,'ID_Solicitud','Fecha_Solicitud','Estado_Solicitud');
    }

    public function tipo__equipos()
    {
        return $this->HasOne(Tipo_Equipo::class,'ID_Tipo_Equipo','Nombre_Tipo_Equipo');
    }

    public function software()
    {
        return $this->HasOne(Software::class,'ID_Software','Nombre_Software');
    }
}
