<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Barryvdh\DomPDF\Facade\Pdf;

class TipoEquipoController extends Controller
{
    
    public function index()
    {
        return Inertia::render('User/Index',[
            'equipos' => Tipo_Equipo::all()->where('Editor_Equipo','=','ADMIN'),
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        return Inertia::render('User/Lista',[
            'equipos' =>Tipo_Equipo::where('ID_Tipo_Equipo',$id)->first(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

    public function reportesdos($tipo)
    {
        $equipos = Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)->first();
        $especificacion = Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)->get();
        $pdf = Pdf::loadView('pdf',compact(['equipos','especificacion']));
        return $pdf->download('pdf_file.pdf');
    }
    
    public function edit(Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    
    public function update(Request $request, Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    
    public function destroy(Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    public function viewEspecificacion($tipo,$uso){
        return Inertia::render('User/Especificacion',[
            'equipos' => Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)->first(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)
                            ->where('ID_Uso_Equipo',$uso)->get(),
        ]);
    }
}
