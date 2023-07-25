<?php

namespace App\Http\Controllers;

use App\models\Cargo;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class CargoController extends Controller
{
    private function validador1(array $datos)
    {

        return Validator::make($datos, [
            'nombre' => ['required', 'max:20', 'unique:cargo,nombre'],
            'descrip' => ['nullable', 'string']
        ]);
    }
    public function index()
    {
        $datos = Cargo::orderby('nombre', 'asc')->paginate(10);
        return view('cargo.index', compact('datos'));
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
        return view("cargo.modificar", compact('cargo'));
    }
    public function create(Request $request)
    {
        //$validar = $this->validador1($request->all());

        $request->validate(
            [
                'textnombre' => ['required', 'max:20', 'unique:cargo,nombre'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'El Nombre del Cago es obligatorio', 'Llene',
                'max' => ':El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre del cargo ya existe'
            ]
        );
        try {

            $cargo = new Cargo();
            $cargo->nombre = $request->post('textnombre');
            $cargo->descrip = $request->post('textdescrip');
            $cargo->save();


            return redirect()->route('cargo')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('cargo')->with('Error', 'Error al registrar');
        }

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


    public function update(Request $request, $id)
    {

        $cargo = Cargo::find($id);
        $cargo->nombre = $request->post('textnombre');
        $cargo->descrip = $request->post('textdescrip');
        $cargo->save();
        return redirect()->route('cargo')->with('seccess', 'Se modifico correctamente');
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


    public function delete($id)
    {

        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect()->route('cargo')->with('success', 'Se Elimino  correctamente el registro');
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
