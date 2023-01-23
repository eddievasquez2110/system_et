<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Software;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoSoftwareController extends Controller
{
   
    public function index()
    {
        return Inertia::render('User/InfoSoftware',[
            'infoSoftwares' => Software::all(),
            // 'usuarios' => User::with('rol:ID_Rol,Nombre_Rol,created_at','oficina:ID_Oficina,Nombre_Oficina,Cargo_Oficina,created_at')->get(),
            // 'oficina' => Oficina::all(),
        ]);
    }
}
