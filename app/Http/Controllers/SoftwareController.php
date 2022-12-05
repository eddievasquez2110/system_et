<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;
class SoftwareController extends Controller
{
    
    public function index()
    {
        return Inertia::render('User/Solicitud',[
            'softwares' => Software::all(),
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

    public function show(Software $software)
    {
        
    }

    public function edit(Software $software)
    {
        //
    }

    
    public function update(Request $request, Software $software)
    {
        //
    }

    
    public function destroy(Software $software)
    {
        //
    }
}
