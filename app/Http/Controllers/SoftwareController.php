<?php

namespace App\Http\Controllers;

use App\Models\CartSoftware;
use App\Models\Especificacion_Equipo;
use App\Models\Software;
use App\Models\Tipo_Equipo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Inertia\Inertia;
 
use Dompdf\Dompdf;

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
        $cart = CartSoftware::find($id);
        if($cart){
            $cart->delete();
        }
    }

    public function removeAll(){
        $cart = CartSoftware::where(['ID_User'=>auth()->user()->id]);
        if($cart){
            $cart->delete();
        }
    }

    public function viewEspecificacion($tipo,$uso){
        $this->removeAll();
        return Inertia::render('User/Especificacion',[
            'equipos' => Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)->first(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)
                            ->where('ID_Uso_Equipo',$uso)->get(),
        ]);
    }

    public function viewPDF($tipo,$uso){
        $user = User::with('Oficina')->where(['id'=>auth()->user()->id])->first();
        $equipos = Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)
        ->first();
        $especificacion = Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)
        ->where('ID_Uso_Equipo',$uso)->get();
        $pdf = Pdf::loadView('pdf',compact(['equipos','especificacion','user']));
        return $pdf->stream('EETT_'.date('YmdHis').'.pdf');
    }

    public function downloadPDF($tipo,$uso){
        $user = User::with('Oficina')->where(['id'=>auth()->user()->id])->first();
        $equipos = Tipo_Equipo::where('ID_Tipo_Equipo',$tipo)->first();
        $especificacion = Especificacion_Equipo::where('ID_Tipo_Equipo',$tipo)
        ->where('ID_Uso_Equipo',$uso)->get();
        $pdf = Pdf::loadView('pdf',compact(['equipos','especificacion','user']));
        return $pdf->download('EETT_'.date('YmdHis').'.pdf');
    }
    
}
