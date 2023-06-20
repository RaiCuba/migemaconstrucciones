<?php

namespace App\Http\Controllers;
use App\models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $datos = Cargo ::orderby('nombre','asc')->paginate(5);
        return view('cargo.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
           
    
            return view("cargo.registrar");
           
        }
        public function formmodificar($idpai)
        {
            $cargo = Cargo::find($idpai);
            return view("cargo.modificar",compact('cargo'));
        
        }
        public function create(Request $request){
            
            $cargo = new Cargo();
            $cargo->nombre=$request->post('textnombre');
            $cargo->descrip=$request->post('textdescrip');
            $cargo->save();
    
            return redirect()->route('cargo')->with('success','Se Registro correctamente');
    
    
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
       
            $cargo = Cargo::find($id);
            $cargo->nombre=$request->post('textnombre');
            $cargo->descrip=$request->post('textdescrip');
            $cargo->save();
            return redirect()->route('cargo')->with('seccess','Se modifico correctamente');
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
       
            $cargo = Cargo::find($id);
            $cargo->delete();
            return redirect()->route('cargo')->with('success','Se Elimino  correctamente el registro');
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
