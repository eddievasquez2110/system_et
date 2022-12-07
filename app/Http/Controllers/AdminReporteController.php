<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminReporteController extends Controller
{
    public function index()
    {
        //$reportList = Especificacion_Equipo::orderBy('ID_Especificacion_Equipo')->paginate(6);
        return Inertia::render('Admin/Reportes/Reportes',[
            //'report' => $reportList
        ]);
    }
}
