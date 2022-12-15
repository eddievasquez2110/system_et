<?php

namespace App\Http\Controllers;

use App\Models\CartSoftware;
use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;
class SoftwareController extends Controller
{
    
    public function index(Request $request)
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
