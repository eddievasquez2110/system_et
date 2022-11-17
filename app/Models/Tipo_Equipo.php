<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipo extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "Tipo__Equipos";
    public function Equipo() {
=======

    protected $fillable = [
        'Nombre_Tipo_Equipo',
    ];

    public function Equipo()
    {
>>>>>>> 688564f22e811ba4aae8cf827a76e39917cf3332
        return $this->belongsTo(Equipo::class);
    }
}
