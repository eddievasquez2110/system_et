<?php

namespace App\Http\Controllers;

use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminUsoEquipoController extends Controller
{
    
    public function index()
    {
        $usos = Uso_Equipo::orderBy('ID_Uso_Equipo')->paginate(6);
        return Inertia::render('Admin/Equipos/UsoEquipo',[
            'usos' => $usos
        ]);
    }






















    public function destroy($id)
    {
        Uso_Equipo::where('ID_Uso_Equipo',$id)->delete();
        return redirect()->route('d.usoequipos.index');
    }
}
