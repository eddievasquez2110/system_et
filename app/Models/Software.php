<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Version',
        'ID_Uso_Equipo',
        'Nombre_Software' => 'required|unique:table,column',
        'Imagen',
        'Version_Software',
        'Descripcion_Software',
        'Editor_Software',
        'Link_Software',
    ];

    public function Uso(){
        return $this->belongsTo(Uso_Equipo::class);
    }
    
    public function Version()
    {
        return $this->HasOne(Version::class);
    }

    public function Especificacion_Software()
    {
        return $this->HasOne(Especificacion_Software::class);
    }
    
    public function Solicitud_Detalle()
    {
        return $this->belongsTo(Solicitud_Detalle::class);
    }
}
