<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre_Oficina' => 'required|unique:table,column',
        'Cargo_Oficina',
    ];

    // protected $hidden = [
    //     'Nombre_Oficina',
    // ];
    
    public $timestamps = true;

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
