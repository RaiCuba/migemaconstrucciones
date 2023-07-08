<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use App\models\CostoPro;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class CostoProdController extends Controller
{
    public function index()
    {
        $datos = CostoPro::orderby('nombre', 'asc')->paginate(5);
        return view('costo_prod.index', compact('datos'));
        // $datos = DB::select("select * from pais");
        //return view("pais.index")->with("datos", $datos);
    }
    //retornar datos segun en nombre del producto

    public function verform()
    {

        $categorias = Categorium::all();
        return view("costo_prod.registrar", compact('categorias'));
    }
    public function formmodificar($id)
    {
        $categorias = Categorium::all();
        $costoprod = CostoPro::find($id);
        return view("costo_prod.modificar", compact('costoprod', 'categorias'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textcategoria' => ['required', 'max:25'],
                'textcostoprod' => ['required', 'numeric'],
            ],
            [
                'required' => 'El Nombre del Cago es obligatorio', 'Llene.',
                'max' => ':El campo no puede tener mas de :max caracteres.',
                'alpha' => 'El campo solo acepta letras.',
                'unique' => 'El nombre del cargo ya existe.',
                'numeric' => 'Engrese solo números.'
            ]
        );
        try {
            $fechas = Carbon::now();
            $costoprod = new CostoPro();
            $costoprod->id_cat = $request->post('textcategoria');
            $costoprod->nombre = $request->post('textcategoria');
            $costoprod->precio = $request->post('textcostoprod');
            $costoprod->fecha = $fechas;
            $costoprod->estado = '1';
            $costoprod->save();

            return redirect()->route('costoprod')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('costoprod')->with('Error', 'Error al registrar');
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

        $costoprod = CostoPro::find($id);
        $costoprod->id_cat = $request->post('textcategoria');
        $costoprod->nombre = $request->post('textnombre');
        $costoprod->precio = $request->post('textcostoprod');

        $costoprod->save();

        return redirect()->route('costoprod')->with('seccess', 'Se modifico correctamente');
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

        $costoprod = CostoPro::find($id);
        $costoprod->delete();
        return redirect()->route('costoprod')->with('success', 'Se Elimino  correctamente el registro');
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
