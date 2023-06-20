<?php

namespace App\Http\Controllers;

use App\Models\LugarExt;
use Illuminate\Http\Request;

class LugarExtController extends Controller
{
    
    public function index(){
        $datos = LugarExt ::orderby('lugar','asc')->paginate(5);
        return view('lugarextraccion.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
           
    
            return view("lugarextraccion.registrar");
           
        }
        public function formmodificar($id)
        {
            $lugarext = LugarExt::find($id);
            return view("lugarextraccion.modificar",compact('lugarext'));
        
        }
        public function create(Request $request){
            
            $lugarext = new LugarExt();
            $lugarext->lugar=$request->post('textlugar');
            $lugarext->descrip=$request->post('textdescrip');
       
            $lugarext->save();
    
            return redirect()->route('lugarext')->with('success','Se Registro correctamente');
    
    
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
        
            $lugarext = LugarExt::find($id);
            $lugarext->lugar=$request->post('textlugar');
            $lugarext->descrip=$request->post('textdescrip');
            $lugarext->save();

            return redirect()->route('lugarext')->with('seccess','Se modifico correctamente');
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
       
            $lugarext = LugarExt::find($id);
            $lugarext->delete();
            return redirect()->route('lugarext')->with('success','Se Elimino  correctamente el registro');
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
