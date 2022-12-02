<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
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
        //
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
