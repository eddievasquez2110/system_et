<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esp_Ordenador extends Model
{
    use HasFactory;
    public function Uso_Equipo() {
        return $this->HasOne(Uso_Equipo::class);
    }
}
