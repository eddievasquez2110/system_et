<?php

namespace App\Http\Controllers;

use App\Models\CartEquipo;
use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\Tipo_Equipo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SolicitudController extends Controller
{
    public function removeAll()
    {
        $cart = CartEquipo::where(['ID_User'=>auth()->user()->id]);
        if($cart){
            $cart->delete();
        }
    }
    public function addPedido()
    {
       $carts = CartEquipo::where('ID_User',auth()->user()->id)->get();
       $pedido = Solicitud::create([
        'id' => auth()->user()->id,
        'Estado_Solicitud' => 'Pendiente',
        'Documento'=> 'xd'
       ]);
       foreach($carts as $carItem){
        $pedidoItems = Solicitud_Detalle::create([
            'ID_Solicitud' => $pedido->id,
            'ID_Tipo_Equipo'=> $carItem->ID_Tipo_Equipo,
            'ID_Uso_Equipo'=> $carItem->ID_Uso_Equipo,
            'Cantidad_Equipo'=> $carItem->Cantidad
           ]);
       }

       $detalle = Solicitud_Detalle::with(['tipoequipos','usoequipo'])->where('ID_Solicitud',$pedido->id)->get();
       
       $array = [];
       foreach($detalle as $detalleItem){
        $especifi = Especificacion_Equipo::where('ID_Tipo_Equipo',$detalleItem->ID_Tipo_Equipo)
        ->where('ID_Uso_Equipo',$detalleItem->ID_Uso_Equipo)->get();
        array_push($array,$especifi);
       }
      
       $user = User::with('Oficina')->where(['id'=>auth()->user()->id])->first();
       $nombreArchivo = date('YmdHis').$pedido->id. "."."pdf";
       $pdf = Pdf::loadView('reportepdf',compact(['array','user','detalle']))->save(public_path('images/documentos/'.$nombreArchivo));
       Solicitud::where('ID_Solicitud',$pedido->id)->update([
        'Documento' => $nombreArchivo
       ]);
       $this->removeAll();
       return redirect()->route('user');
    }

 
   
    public function create()
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
