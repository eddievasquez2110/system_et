<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSoftwareController extends Controller
{
    public function index()
    {
        $soft = Software::orderBy('ID_Software')->paginate(6);
        return Inertia::render('Admin/Software/Index',[
            'soft' => $soft
        ]);
    }

















    public function destroy($id)
    {
        Software::where('ID_Software',$id)->delete();
        return redirect()->route('d.softwares.index');
    }
}
