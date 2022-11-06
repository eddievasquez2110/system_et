<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    public function Version(){
         return $this->hasOne(Version::class);
    }
    public function Especificacion(){
        return $this->hasMany(Especificacion::class);
   }
}
