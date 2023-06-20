<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\Depertamento;
use App\Models\Pai;
class PaisController extends Controller
{
    //
    public function index(){
        $datos = Pai::orderby('nombre','asc')->paginate(5);
        return view('pais.index',compact('datos'));
           // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
        public function getDepartamento(Request $request)
        {
            $paisId = $request->input('pais_id');
            $departamento = Depertamento::where('id_pai', $paisId)->get();
            return response()->json($departamento);
        }
        public function verform()
        {
           
    
            return view("pais.registrar");
           
        }
        public function formmodificar($idpai)
        {
            $pais = Pai::find($idpai);
            return view("pais.modificar",compact('pais'));
        
        }
        public function create(Request $request){
            
            $pais = new Pai();
            $pais->nombre=$request->post('textpais');
            $pais->save();
    
            return redirect()->route('pais')->with('success','Se Registro correctamente');
    
    
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
       
            $pais = Pai::find($id);
            $pais->nombre=$request->post('textpais');
            $pais->save();
            return redirect()->route('pais')->with('seccess','Se modifico correctamente');
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
       
            $pais = Pai::find($id);
            $pais->delete();
            return redirect()->route('pais')->with('success','Se Elimino  correctamente el registro');
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
