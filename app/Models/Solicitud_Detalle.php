<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Detalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Solicitud',
        'ID_Especificacion_Equipo',
        'ID_Especificacion_Software',
        'Descripcion_SolicitudDetalle',
    ];

    public function solicituds()
    {
        return $this->HasOne(Solicitud::class,'ID_Solicitud','Fecha_Solicitud','Estado_Solicitud');
    }

    public function especificacion__equipos()
    {
        return $this->HasMany(Especificacion_Equipo::class,'ID_Especificacion_Equipo','Nombre_Especificacion_Equipo','Especificacion_Equipo');
    }

    public function especificacion__software()
    {
        return $this->HasMany(Especificacion_Software::class,'ID_Especificacion_Software','Nombre_Especificacion_Software','Especificacion_Software');
    }
}
