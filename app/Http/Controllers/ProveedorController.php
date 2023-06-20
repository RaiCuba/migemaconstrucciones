<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $datos = Proveedor::paginate(5);
        return view('proveedor.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function verform()
        {
            return view("proveedor.registrar");
           
        }
        public function formmodificar($id)
        {
            $proveedor = Proveedor::find($id);
       
            return view("proveedor.modificar",compact('proveedor'));
        
        }
        public function create(Request $request){
           //registrar la tabla de productos
          
            $proveedor = new Proveedor();
            $proveedor->nombre=$request->post('textnombre');
            $proveedor->organizacion=$request->post('textorganizacion');
            $proveedor->nit=$request->post('textnit');
            $proveedor->descrip=$request->post('textdescrip');
            $proveedor->estado='1';
            $proveedor->save();
            
          
    
            return redirect()->route('proveedor')->with('success','Se Registro correctamente');
    
    
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
        
            $proveedor = Proveedor::find($id);
            $proveedor->nombre=$request->post('textnombre');
            $proveedor->organizacion=$request->post('textorganizacion');
            $proveedor->nit=$request->post('textnit');
            $proveedor->descrip=$request->post('textdescrip');
            
            $proveedor->save();

            return redirect()->route('proveedor')->with('seccess','Se modifico correctamente');
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
       
            $proveedor = Proveedor::find($id);
            $proveedor->delete();
            return redirect()->route('proveedor')->with('success','Se Elimino  correctamente el registro');
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
