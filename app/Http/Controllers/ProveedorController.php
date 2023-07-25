<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Exception;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $datos = Proveedor::paginate(10);
        return view('proveedor.index', compact('datos'));
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

        return view("proveedor.modificar", compact('proveedor'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textnombre' => ['required', 'max:20'],
                'textorganizacion' => ['required', 'max:25'],
                'textnit' => ['required', 'max:12'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Los campo con (*) es obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe',
                'numeric' => 'Ingrese solo números'
            ]
        );
        try {
            //code...

            //registrar la tabla de productos

            $proveedor = new Proveedor();
            $proveedor->nombre = $request->post('textnombre');
            $proveedor->organizacion = $request->post('textorganizacion');
            $proveedor->nit = $request->post('textnit');
            $proveedor->descrip = $request->post('textdescrip');
            $proveedor->estado = '1';
            $proveedor->save();



            return redirect()->route('proveedor')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('proveedor')->with('Error', 'Error al Registrar ');
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
                'textorganizacion' => ['required', 'max:25'],
                'textnit' => ['required', 'max:12'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Los campo con (*) es obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe',
                'numeric' => 'Ingrese solo números'
            ]
        );
        try {

            $proveedor = Proveedor::find($id);
            $proveedor->nombre = $request->post('textnombre');
            $proveedor->organizacion = $request->post('textorganizacion');
            $proveedor->nit = $request->post('textnit');
            $proveedor->descrip = $request->post('textdescrip');

            $proveedor->save();

            return redirect()->route('proveedor')->with('Correcto', 'Se modificó correctamente');
        } catch (Exception $e) {
            return redirect()->route('proveedor')->with('Error', 'Error al modificar');
        }
    }


    public function delete($id)
    {
        try {
            $proveedor = Proveedor::find($id);
            $proveedor->delete();
            return redirect()->route('proveedor')->with('Correcto', 'Se Elimino  correctamente el registro');
        } catch (Exception $e) {
            return redirect()->route('proveedor')->with('Error', 'Error al Elimino el registro');
        }
    }
}
