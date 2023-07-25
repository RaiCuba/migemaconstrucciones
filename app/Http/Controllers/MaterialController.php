<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Material;
use App\Models\Compra;
use App\Models\LugarExt;
use App\Models\Proveedor;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $datos = Material::orderby('nombre', 'asc')->paginate(10);
        return view('material.index', compact('datos'));
        // $datos = DB::select("select * from pais");
        //return view("pais.index")->with("datos", $datos);
    }
    public function verform()
    {

        $proveedores = Proveedor::all();
        $extraccion = LugarExt::all();
        $usuarios = User::all();
        return view("material.registrar", compact('proveedores', 'extraccion', 'usuarios'));;
    }
    public function formmodificar($id)
    {
        $material = Material::find($id);
        return view("material.modificar", compact('material'));
    }
    public function create(Request $request)
    {

        $request->validate(
            [
                'textcantidad' => ['required', 'numeric'],
                'textcosto' => ['required', 'numeric'],
                'textmaterial' => ['required', 'max:20'],
                'textlugar' => ['required', 'max:50'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'unique' => 'El nombre y/o dato del cargo ya existe',
                'numeric' => 'Ingrese solo números'
            ]
        );
        try {
            $fecha = Carbon::now();
            //Registrar compra
            $compra = new Compra();
            $compra->id_usu = $request->post('textusuario');
            $compra->cantidad = $request->post('textcantidad');
            $compra->costo = $request->post('textcosto');
            $compra->fecha = $fecha;
            $compra->save();
            //Retornar id_Max de compra;
            $idComMax = DB::table('compra')->max('id_com');

            //registrr MAterial
            $material = new Material();
            $material->id_prov = $request->post('textproveedor');
            $material->id_com = $idComMax;
            $material->id_lug_ext = $request->post('textextraccion');
            $material->nombre = $request->post('textmaterial');
            $material->lugar = $request->post('textlugar');
            $material->estado = '1';
            $material->save();

            return redirect()->route('material')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('material')->with('Error', 'Se Registro correctamente');
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

        $material = Material::find($id);
        $material->nombre = $request->post('textnombre');
        $material->descrip = $request->post('textdescrip');
        $material->save();

        return redirect()->route('material')->with('seccess', 'Se modifico correctamente');
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

        $material = Material::find($id);
        $material->delete();
        return redirect()->route('material')->with('success', 'Se Elimino  correctamente el registro');
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
