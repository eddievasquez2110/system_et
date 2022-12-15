<?php

namespace App\Http\Controllers;

use App\Models\CartSoftware;
use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;
class SoftwareController extends Controller
{
    
    public function index()
    {
        $cartItems = CartSoftware::with('software')
                        ->where(['ID_User'=>auth()->user()->id])
                        ->get();
        return Inertia::render('User/Solicitud',[
            'softwares' => Software::all(),
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
