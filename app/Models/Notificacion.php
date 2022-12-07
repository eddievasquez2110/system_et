<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Email_User',
        'Asunto_User',
        'Mensaje_User',
    ];

    // protected $hidden = [
    //     'Nombre_Oficina',
    // ];
    
    public $timestamps = true;
}
