<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipos";
    protected $primaryKey = 'ID_Equipo';

    protected $fillable = [
        'ID_Tipo_Equipo',
        'ID_Especificacion',
        'Nombre_Equipo',
    ];

    public function Especificacion()
    {
        return $this->HasOne(Especificacion::class);
    }

    public function Tipo_Equipo()
    {
        return $this->HasOne(Tipo_Equipo::class);
    }

    public function Solicitud_Detalle()
    {
        return $this->belongsTo(Solicitud_Detalle::class);
    }

}
