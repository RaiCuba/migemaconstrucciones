<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use Exception;

class LugarController extends Controller
{
    //
    public function index()
    {
        $datos = Lugar::orderby('almacen', 'asc')->paginate(10);
        return view('lugar.index', compact('datos'));
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
        return view("lugar.modificar", compact('lugar'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textalmacen' => ['required', 'max:30'],
                'textdireccion' => ['required', 'max:50'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );
        try {

            $lugar = new Lugar();
            $lugar->almacen = $request->post('textalmacen');
            $lugar->descrip = $request->post('textdescrip');
            $lugar->direccion = $request->post('textdireccion');
            $lugar->estado = '1';
            $lugar->save();

            return redirect()->route('lugar')->with('Correcto', 'Se Registro correctamente');

            //code...
        } catch (Exception $e) {
            return redirect()->route('lugar')->with('Error', 'Error al Registro ');
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


    public function update(Request $request)
    {
        $request->validate(
            [
                'textlugar1' => ['required', 'max:30'],
                'textdireccion1' => ['required', 'max:50'],
                'textdescrip1' => ['required', 'max:100'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );
        try {

            $iddd = $request->post('id');
            $lugar = Lugar::find($iddd);
            $lugar->almacen = $request->post('textlugar1');
            $lugar->descrip = $request->post('textdescrip1');
            $lugar->direccion = $request->post('textdireccion1');
            $lugar->save();
            return redirect()->route('lugar')->with('Correcto', 'Se modificó correctamente el registro');
        } catch (Exception $e) {
            print('No entro al try');
            return redirect()->route('lugar')->with('Error', 'Error al modificar');
        }
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

        $lugar = Lugar::find($id);
        $lugar->delete();

        return redirect()->route('lugar')->with('Correcto', 'Se Elimino  correctamente el registro');
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
