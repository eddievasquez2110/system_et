<?php

namespace App\Http\Controllers;

use App\Models\CartEquipo;
use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SolicitudController extends Controller
{
    public function index()
    {
        $solis = Solicitud::with('users','solicitud__detalles')->where(['id'=>auth()->user()->id])
        ->join('solicitud__detalles','solicituds.ID_Solicitud','=','solicitud__detalles.ID_Solicitud')
        ->join('tipo__equipos','solicitud__detalles.ID_Tipo_Equipo','=','tipo__equipos.ID_Tipo_Equipo')
        ->paginate(5);

        return Inertia::render('User/Solicitud/Index',[
            'solis' => $solis
        ]);
    }

    public function removeAll()
    {
        $cart = CartEquipo::where(['ID_User'=>auth()->user()->id]);
        if($cart){
            $cart->delete();
        }
    }

    public function addPedido(Request $request)
    {
        //subir PDF (proyecto)
        $request ->validate([
            'Proyecto' => "required|mimes:pdf|max:10000"
        ]);
        $proyecto = $request->all();
        if($imagen = $request->file('Proyecto')) {
            $rutaGuardarImg = 'images/proyectos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $proyecto = $imagenProducto;         
        }
        //generar pedido
       $carts = CartEquipo::where('ID_User',auth()->user()->id)->get();
       $pedido = Solicitud::create([
        'id' => auth()->user()->id,
        'Documento'=> '-',
        'Proyecto' => $proyecto
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

}
