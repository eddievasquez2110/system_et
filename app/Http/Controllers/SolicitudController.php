<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SolicitudController extends Controller
{
    
    public function index()
    {
        $reportes = Solicitud::all();
        return Inertia::render('User/Select_Software',['reportes'=>$reportes]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request ->validate([
            'id' => 'required',
            'Fecha_Solicitud' => 'required',
            'Estado_Solicitud' => 'required',
            'Documento' => 'required|image|mimes:jpeg,png,svg,pdf|max:1024'
        ]);

        $soli = $request->all();

        if($imagen = $request->file('Documento')) {
            $rutaGuardarImg = 'images/documentos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $soli['Documento'] = "$imagenProducto";         
        }

        Tipo_Equipo::create($soli);
        return redirect()->route('d.solicituds');
    }

   
}
