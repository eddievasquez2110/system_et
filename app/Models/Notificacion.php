<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre_User',
        'Email_User',
        'Asunto_User',
        'Mensaje_User',
    ];
    
    public $timestamps = true;
}
