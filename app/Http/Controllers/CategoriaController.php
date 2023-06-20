<?php

namespace App\Http\Controllers;
use App\Models\Categorium;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $datos = Categorium ::orderby('nombre','asc')->paginate(5);
        return view('categoria.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
           
    
            return view("categoria.registrar");
           
        }
        public function formmodificar($id)
        {
            $categoria = Categorium::find($id);
            return view("categoria.modificar",compact('categoria'));
        
        }
        public function create(Request $request){
            
            $categoria = new Categorium();
            $categoria->nombre=$request->post('textnombre');
            $categoria->descrip=$request->post('textdescrip');
            $categoria->estado='1';
            $categoria->save();
    
            return redirect()->route('categoria')->with('success','Se Registro correctamente');
    
    
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
       
            $categoria = Categorium::find($id);
            $categoria->nombre=$request->post('textnombre');
            $categoria->descrip=$request->post('textdescrip');
            $categoria->save();
            return redirect()->route('categoria')->with('seccess','Se modifico correctamente');
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
       
            $categoria = Categorium::find($id);
            $categoria->delete();
            return redirect()->route('categoria')->with('success','Se Elimino  correctamente el registro');
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
