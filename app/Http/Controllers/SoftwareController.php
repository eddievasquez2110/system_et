<?php

namespace App\Http\Controllers;

use App\Models\CartSoftware;
use App\Models\Especificacion_Equipo;
use App\Models\Software;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;
class SoftwareController extends Controller
{
    
    public function index(Request $request,$id)
    {
        $search = $request->query('search');
        $cartItems = CartSoftware::with('software')->join('software','cart_software.ID_Software','=','software.ID_Software')
          ->where(['ID_User'=>auth()->user()->id])
          ->get();
        return Inertia::render('User/Solicitud',[
            'softwares' => Software::query()->when($search, fn($query) => 
            $query->where('ID_Software','LIKE',"%{$search}%")->orWhere('Nombre_Software', 'LIKE', "%{$search}%")
              )->get(),
            'items' => $cartItems,
            'card' => CartSoftware::where(['ID_User'=>auth()->user()->id])->get(),
            'id'=> $id
        ]);
    }

    public function addToCart($id){
        $data = ['ID_User'=>auth()->user()->id,
                'ID_Software' => $id];
        CartSoftware::updateOrCreate($data);
    }

    public function removeItem($id){
        $cart = CartSoftware::where('ID_Software',$id)->first();
        if($cart){
            $cart->delete();
        }
    }

    public function viewEspecificacion($tipo,$uso){
        return Inertia::render('User/Especificacion',[
            'equipos' => Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)->first(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)
                            ->where('ID_Uso_Equipo',$uso)->get(),
        ]);
    }

    public function ordenarAsc(Request $request){
        $search = $request->query('search');
        $cartItems = CartSoftware::with('software')->join('software','cart_software.ID_Software','=','software.ID_Software')
          ->where(['ID_User'=>auth()->user()->id])
          ->get();
        return Inertia::render('User/Solicitud',[
            'softwares' => Software::query()->when($search, fn($query) => 
            $query->where('ID_Software','LIKE',"%{$search}%")->orWhere('Nombre_Software', 'LIKE', "%{$search}%")->orderBy('Nombre_Software','ASC')
              )->get(),
            'items' => $cartItems,
        ]);
    }

    public function ordenarDesc(Request $request)
    {
        $search = $request->query('search');
        $cartItems = CartSoftware::with('software')->join('software','cart_software.ID_Software','=','software.ID_Software')
          ->where(['ID_User'=>auth()->user()->id])
          ->get();
        return Inertia::render('User/Solicitud',[
            'softwares' => Software::query()->when($search, fn($query) => 
            $query->where('ID_Software','LIKE',"%{$search}%")->orWhere('Nombre_Software', 'LIKE', "%{$search}%")->orderBy('Nombre_Software','DESC')
              )->get(),
            'items' => $cartItems,
        ]);
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
