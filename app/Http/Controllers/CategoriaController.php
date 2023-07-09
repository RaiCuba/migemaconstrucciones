<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use Exception;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $datos = Categorium::orderby('nombre', 'asc')->paginate(5);
        return view('categoria.index', compact('datos'));
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
        return view("categoria.modificar", compact('categoria'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textnombre' => ['required', 'max:20'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe'
            ]
        );
        try {
            //code...

            $categoria = new Categorium();
            $categoria->nombre = $request->post('textnombre');
            $categoria->descrip = $request->post('textdescrip');
            $categoria->estado = '1';
            $categoria->save();

            return redirect()->route('categoria')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('categoria')->with('Error', 'Error al Registrar ');
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

        $request->validate(
            [
                'textnombre' => ['required', 'max:20'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe'
            ]
        );
        try {

            $categoria = Categorium::find($id);
            $categoria->nombre = $request->post('textnombre');
            $categoria->descrip = $request->post('textdescrip');
            $categoria->save();
            return redirect()->route('categoria')->with('Correcto', 'Se modificó correctamente');
        } catch (Exception $e) {
            return redirect()->route('categoria')->with('Error', 'Error al modificar');
        }
    }


    public function delete($id)
    {
        try {

            $categoria = Categorium::find($id);
            $categoria->delete();
            return redirect()->route('categoria')->with('Correcto', 'Se Eliminó  correctamente el registro');
        } catch (Exception $e) {
            return redirect()->route('categoria')->with('Error', 'Error al  eliminar el registro');
        }
    }
}
