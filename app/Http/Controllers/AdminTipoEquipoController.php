<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminTipoEquipoController extends Controller
{
    public function index()
    {
        $tiposList = Tipo_Equipo::orderBy('ID_Tipo_Equipo')->paginate(3);
        return Inertia::render('Admin/Equipos',[
            'tipos' => $tiposList
        ]);
    }
}
