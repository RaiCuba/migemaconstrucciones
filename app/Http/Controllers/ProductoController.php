<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\CostoPro;
use App\Models\Empleado;
use App\Models\Lugar;
use App\Models\ProLug;
use Carbon\Carbon;
class ProductoController extends Controller
{
    //
    public function index(){
        $datos = Producto::paginate(5);
        return view('producto.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
            $lugares = Lugar::all();
            $empleados = Empleado::all();
            $costoprod = CostoPro:: all(); 
            return view("producto.registrar", compact('costoprod','empleados','lugares'));
           
        }
        public function formmodificar($id)
        {
            $producto = Producto::find($id);
            $lugares = Lugar::all();
            $costoprod = CostoPro::all();
            $empleados = Empleado::all();
            return view("producto.modificar",compact('costoprod','empleados','lugares','producto'));
        
        }
        public function create(Request $request){
           //registrar la tabla de productos
            $fechas = Carbon::now();
            $producto = new Producto();
            $producto->id_emp=$request->post('textempleado');
            $producto->id_cos_pro=$request->post('textcostoprod');
            $producto->cantidad=$request->post('textcantidad');
            $producto->descrip=$request->post('textdescripcion');
            $producto->estado='1';
            $producto->fecha= $fechas;
            $producto->save();
            
            //registrar pro_lug;   
            $idProMax = DB::table('producto')->max('id_pro'); 
            
            $prolug = new ProLug();
            $prolug->id_pro = $idProMax;
            $prolug->id_lug = $request->post('textlugar');
            $prolug->save();
    
            return redirect()->route('producto')->with('success','Se Registro correctamente');
    
    
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
        
            $producto = Producto::find($id);
            $producto->id_emp=$request->post('textempleado');
            $producto->id_cos_pro=$request->post('textcostoprod');
            $producto->cantidad=$request->post('textcantidad');
            $producto->descrip=$request->post('textdescripcion');
            $producto->save();

            return redirect()->route('producto')->with('seccess','Se modifico correctamente');
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
       
            $producto = Producto::find($id);
            $producto->delete();
            return redirect()->route('producto')->with('success','Se Elimino  correctamente el registro');
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
