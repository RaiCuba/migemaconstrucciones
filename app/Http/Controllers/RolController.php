<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
class RolController extends Controller
{
    //
    public function index(){
        $datos = Rol ::orderby('nombre','asc')->paginate(5);
        return view('rol.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
           
    
            return view("rol.registrar");
           
        }
        public function formmodificar($id)
        {
            $rol = Rol::find($id);
            return view("rol.modificar",compact('rol'));
        
        }
        public function create(Request $request){
            
            $rol = new Rol();
            $rol->nombre=$request->post('textnombre');
            $rol->descrip=$request->post('textdescrip');
           
            $rol->save();
    
            return redirect()->route('rol')->with('success','Se Registro correctamente');
    
    
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
        
            $rol = Rol::find($id);
            $rol->nombre=$request->post('textnombre');
            $rol->descrip=$request->post('textdescrip');
            $rol->save();

            return redirect()->route('rol')->with('seccess','Se modifico correctamente');
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
       
            $rol = Rol::find($id);
            $rol->delete();
            return redirect()->route('rol')->with('success','Se Elimino  correctamente el registro');
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
