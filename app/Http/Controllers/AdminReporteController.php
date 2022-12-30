<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminReporteController extends Controller
{
    public function index($mes)
    {
        $total = Solicitud::all();
        return Inertia::render('Admin/Reportes/Reportes',[
            'total' => $total,
        ]);
    }
}
