<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
class LugarController extends Controller
{
    //
    public function index(){
        $datos = Lugar ::orderby('almacen','asc')->paginate(5);
        return view('lugar.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
           
    
            return view("lugar.registrar");
           
        }
        public function formmodificar($id)
        {
            $lugar = Lugar::find($id);
            return view("lugar.modificar",compact('lugar'));
        
        }
        public function create(Request $request){
            
            $lugar = new Lugar();
            $lugar->almacen=$request->post('textalmacen');
            $lugar->descrip=$request->post('textdescrip');
            $lugar->direccion=$request->post('textdireccion');
            $lugar->estado='1';
            $lugar->save();
    
            return redirect()->route('lugar')->with('success','Se Registro correctamente');
    
    
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
        
            $lugar = Lugar::find($id);
            $lugar->almacen=$request->post('textlugar');
            $lugar->descrip=$request->post('textdescrip');
            $lugar->direccion=$request->post('textdireccion');
            $lugar->save();

            return redirect()->route('lugar')->with('seccess','Se modifico correctamente');
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
       
            $lugar = Lugar::find($id);
            $lugar->delete();
            return redirect()->route('lugar')->with('success','Se Elimino  correctamente el registro');
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
