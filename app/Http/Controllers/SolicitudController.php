<?php

namespace App\Http\Controllers;

use App\Models\CartEquipo;
use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

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
        'Documento'=> '-',
        'Proyecto'=> '-'
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

    //    //mejorar
    //     $nombreArchivoDoc = date('YmdHis').$pedido->id. "."."pdf";
    //     if($imagen = $pedido->id->file('Imagen')) {
    //         $rutaGuardarImg = 'images/proyectos';
    //         $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
    //         $imagen->move($rutaGuardarImg, $imagenProducto);
    //         $proyecto['Imagen'] = "$imagenProducto";         
    //     }

    //     $proyecto = Solicitud::get()->where('ID_Solicitud',$pedido->id)->update([
    //         'Proyecto' => $nombreArchivoDoc
    //     ]);
       
       $user = User::with('Oficina')->where(['id'=>auth()->user()->id])->first();
       $nombreArchivo = date('YmdHis').$pedido->id. "."."pdf";
       $pdf = Pdf::loadView('reportepdf',compact(['array','user','detalle']))->save(public_path('images/documentos/'.$nombreArchivo));
       Solicitud::where('ID_Solicitud',$pedido->id)->update([
        'Documento' => $nombreArchivo
       ]);

       $this->removeAll();
       return redirect()->route('user');
    }

    public function subirPDF(Request $request){
        $request ->validate([
            'Proyecto' => 'required|image|mimes:pdf'
        ]);

        $proyecto = $request->all();

        if($imagen = $request->file('Imagen')) {
            $rutaGuardarImg = 'images/proyectos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $proyecto['Imagen'] = "$imagenProducto";         
        }
      
        Solicitud::create($proyecto);
        return redirect()->route('carritoindex');
    }

}
