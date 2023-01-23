<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
class ReporteController extends Controller
{
    
    public function index()
    {
        $reportes = User::all();
        return Inertia::render('Admin/Reportes',['reportes'=>$reportes]);
    }

}
