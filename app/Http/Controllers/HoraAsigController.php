<?php

namespace App\Http\Controllers;

use App\models\HoraAsig;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class HoraAsigController extends Controller
{
    //
    public function index()
    {
        $datos = HoraAsig::orderby('id_hor_asi', 'asc')->paginate(5);
        return view('hora_asig.index', compact('datos'));
        // $datos = DB::select("select * from pais");
        //return view("pais.index")->with("datos", $datos);
    }
    public function verform()
    {
        return view("hora_asig.registrar");
    }
    public function formmodificar($idpai)
    {

        $horaasig = HoraAsig::find($idpai);
        return view("hora_asig.modificar", compact('horaasig'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'texthoraent' => ['required', 'date'],
                'texthorasal' => ['required', 'date'],
                'texthoraentt' => ['required', 'date'],
                'texthorasalt' => ['required', 'date'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );

        try {
            $fecha = Carbon::now();

            $horaasig = new HoraAsig();
            $horaasig->hora_ent_m = $request->post('texthoraent');
            $horaasig->hora_sal_m = $request->post('texthorasal');
            $horaasig->hora_ent_t = $request->post('texthoraentt');
            $horaasig->hora_sal_t = $request->post('texthorasalt');
            $horaasig->fecha = $fecha;
            $horaasig->estado = '1';
            $horaasig->save();

            return redirect()->route('horaasig')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('horaasig')->with('Error', 'Error al Registro ');
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

        $horaasig = HoraAsig::find($id);
        $horaasig->hora_ent_m = $request->post('texthoraent');
        $horaasig->hora_sal_m = $request->post('texthorasal');
        $horaasig->hora_ent_t = $request->post('texthoraentt');
        $horaasig->hora_sal_t = $request->post('texthorasalt');
        $horaasig->save();
        return redirect()->route('horaasig')->with('seccess', 'Se modifico correctamente');
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

        $horaasig = HoraAsig::find($id);
        $horaasig->delete();
        return redirect()->route('horaasig')->with('success', 'Se Elimino  correctamente el registro');
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
