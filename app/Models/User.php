<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'ID_Rol',
        'ID_Oficina',
        'name',
        'email',
        'password',
    ];

    protected $attributes  = [
        'ID_Rol' => '',
        'ID_Oficina' => '',
        'name' => '',
        'email' => '',
        'password' => '',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Rol()
    {
        return $this->HasOne(Rol::class, 'ID_Rol', 'ID_Rol');
    }

    public function Oficina()
    {
        return $this->HasOne(Oficina::class, 'ID_Oficina', 'ID_Oficina');
    }

    public function Solicitud()
    {
        return $this->belongsTo(Solicitud::class); 
    }

}
