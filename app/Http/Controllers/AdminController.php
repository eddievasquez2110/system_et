<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AdminController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=> ['index']]);
    }

    public function index()
    {
        $enero = Solicitud::whereMonth('created_at',date(1))->get();
        $febrero = Solicitud::whereMonth('created_at',date(2))->get();
        $marzo = Solicitud::whereMonth('created_at',date(3))->get();
        $abril = Solicitud::whereMonth('created_at',date(4))->get();
        $mayo = Solicitud::whereMonth('created_at',date(5))->get();
        $junio = Solicitud::whereMonth('created_at',date(6))->get();
        $julio = Solicitud::whereMonth('created_at',date(7))->get();
        $agosto = Solicitud::whereMonth('created_at',date(8))->get();
        $septiembre = Solicitud::whereMonth('created_at',date(9))->get();
        $octubre = Solicitud::whereMonth('created_at',date(10))->get();
        $noviembre = Solicitud::whereMonth('created_at',date(11))->get();
        $diciembre = Solicitud::whereMonth('created_at',date(12))->get();
        $solicitud = Solicitud::all();
        $user = User::where('ID_Rol',2)->get();
        return Inertia::render('Admin/Admin',[
            'solicitud' => $solicitud,
            'user' => $user,
            'enero' => $enero,
            'febrero' => $febrero,
            'marzo' => $marzo,
            'abril' => $abril,
            'mayo' => $mayo,
            'junio' => $junio,
            'julio' => $julio,
            'agosto' => $agosto,
            'septiembre' => $septiembre,
            'octubre' => $octubre,
            'noviembre' => $noviembre,
            'diciembre' => $diciembre
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
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
