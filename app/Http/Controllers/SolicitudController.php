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

        $tipo_equip = $request->all();

        if($imagen = $request->file('Documento')) {
            $rutaGuardarImg = 'images/documentos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Documento'] = "$imagenProducto";         
        }
      
        Tipo_Equipo::create($tipo_equip);
        return redirect()->route('d.solicituds');
    }

    
    public function show(Solicitud $solicitud)
    {
        //
    }

    
    public function edit(Solicitud $solicitud)
    {
        //
    }

    
    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
