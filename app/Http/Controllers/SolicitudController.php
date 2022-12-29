<?php

namespace App\Http\Controllers;

use App\Models\CartEquipo;
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

       $detalle = Solicitud_Detalle::where('ID_Solicitud',$pedido->id)->get();
       
       $user = User::with('Oficina')->where(['id'=>auth()->user()->id])->first();
       $nombreArchivo = date('YmdHis').$pedido->id. "."."pdf";
       $pdf = Pdf::loadView('reportepdf',compact(['detalle','user']))->save(public_path('images/documentos/'.$nombreArchivo));
       Solicitud::where('ID_Solicitud',$pedido->id)->update([
        'Documento' => $nombreArchivo
       ]);
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
