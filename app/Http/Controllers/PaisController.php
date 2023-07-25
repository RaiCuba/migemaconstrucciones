<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\Depertamento;
use App\Models\Pai;
use Exception;

class PaisController extends Controller
{
    //
    public function index()
    {
        $datos = Pai::orderby('nombre', 'asc')->paginate(10);
        return view('pais.index', compact('datos'));
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
        return view("pais.modificar", compact('pais'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textpais' => ['required', 'max:15', 'alpha'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'numeric' => 'Ingrese solo números',
                'alpha' => 'Ingrese solo letras'
            ]
        );
        try {

            $pais = new Pai();
            $pais->nombre = $request->post('textpais');
            $pais->save();

            return redirect()->route('pais')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('pais')->with('Error', 'Error al Registrar ');
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

        try {
            $pais = Pai::find($id);
            $pais->nombre = $request->post('textpais');
            $pais->save();
            return redirect()->route('pais')->with('Correcto', 'Se modificá correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('pais')->with('Error', 'Error al modificar');
        }
    }


    public function delete($id)
    {
        try {
            $pais = Pai::find($id);
            $pais->delete();
            return redirect()->route('pais')->with('Correcto', 'Se Elimino  correctamente el registro');
        } catch (\Throwable $th) {
            return redirect()->route('pais')->with('Error', 'Error al Eliminar el registro');
        }
    }
}
