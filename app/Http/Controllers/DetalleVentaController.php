<?php

namespace App\Http\Controllers;

use App\Models\CostoPro;
use Illuminate\Support\Facades\DB;
use App\Models\DetalleVentum;
use App\Models\Producto;
use App\Models\User;
use App\Models\Ventum;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index(){
        $datos = DetalleVentum::paginate(5);
        return view('ventas.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function getDatos(Request $request)
        {
            $paisId = $request->input('pais_id');
            $pro = Producto::where('id_pro', $paisId)->get();
            return response()->json($pro);
        }
        public function getCostoPro(Request $request)
        {
            $dato = $request->input('opcion');
            return view('ventas')->with('dato', $dato);
        }
        public function verform()
        {
            $usuarios = User:: all(); 
            $productos = Producto:: all(); 
            return view("ventas.registrar", compact('usuarios','productos'));
           
        }
        public function formmodificar($id)
        {
            $detalleventa = DetalleVentum::find($id);
            $venta = Ventum::all();
            return view("ventas.modificar",compact('venta'));
        
        }
        
        public function create(Request $request){
           //registrar la tabla de productos
            $fechas = Carbon::now();
            $venta = new Ventum();
            $venta->id_usu=$request->post('textusuario');
            $venta->nro=$request->post('textnumero');
            $venta->estado='1';
            $venta->fecha= $fechas;
            $venta->save();
            
            //registrar pro_lug;   
            $idProMax = DB::table('venta')->max('id_ven'); 

            $ventas = new DetalleVentum();
            $ventas->id_pro = $request->post ('id');
            $ventas->id_ven = $idProMax;
            $ventas->cantidad = $request->post('valor');
            $ventas->fecha= $fechas;
            $ventas->precio = $request->post('precio');
            $ventas->descrip = $request->post('descripcion');
            $ventas->total = $request->post('resultado');
            $ventas->save();
    
            return redirect()->route('ventas')->with('success','Se Registro correctamente');
    
    
            // try{
            //     $sql = DB::insert("insert into pais(nombre)values(?)",[
            //         $request->textpais,
            
            //     ]);
            // }catch (\Throwable $th)
            // {
            //     $sql =0;
            // }
            // if ($sql == true) {
            //     return back()->with("Correcto","Se registro el pais correctamente");
            // } else {
            //     return back()->with("Error","Error de registro");
                
            // }
    
            
    
        
        }
    
    
        public function update(Request $request, $id){
        
            $ventas = DetalleVentum::find($id);
            $ventas->id_pro = $request->post ('textproducto');
            $ventas->cantidad = $request->post('textcantidad');
            $ventas->precio = $request->post('textprecio');
            $ventas->descrip = $request->post('textdescrip');
            $ventas->total = $request->post('texttotal');
            $ventas->save();
    
            return redirect()->route('ventas')->with('success','Se Registro correctamente');
     // try{
            // $sql = DB::update("update pais set nombre=? where id_pai=?",[
                 
            //         $request->textpais,
            //         $request->textid,
                    
            //     ]);  
            //      //para validar midificar cuando no tocamos los registro
            //     if($sql ==0) {
            //         $sql ==1;
            //     }
            // }catch (\Throwable $th)
            // {
            //     $sql =0;
            // }
            //     if ($sql == true) {
            //         return back()->with("Correcto","Se Modifico el Pais correctamente");
            //     } else {
            //         return back()->with("Error","Error al modificar");
                    
            //     }
        }
    
    
        public function delete($id){
       
            $ventas = DetalleVentum::find($id);
            $ventas->delete();
            return redirect()->route('ventas')->with('success','Se Elimino  correctamente el registro');
            // try{
            // $sql = DB::delete("delete from pais where id_pai=$id");           
            // }catch (\Throwable $th)
            // {
            //     $sql =0;
            // }
            //     if ($sql == true) {
            //         return back()->with("Correcto","Se elimino El pais correctamente");
            //     } else {
            //         return back()->with("Error","Error al eliminar");
                    
            //     }
        }
}
