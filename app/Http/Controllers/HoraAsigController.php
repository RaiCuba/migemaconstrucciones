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
                'texthoraent' => ['required'],
                'texthorasal' => ['required'],
                'texthoraentt' => ['required'],
                'texthorasalt' => ['required'],
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
        $request->validate(
            [
                'texthoraent' => ['required'],
                'texthorasal' => ['required'],
                'texthoraentt' => ['required'],
                'texthorasalt' => ['required'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );
        try {
            $horaasig = HoraAsig::find($id);
            $horaasig->hora_ent_m = $request->post('texthoraent');
            $horaasig->hora_sal_m = $request->post('texthorasal');
            $horaasig->hora_ent_t = $request->post('texthoraentt');
            $horaasig->hora_sal_t = $request->post('texthorasalt');
            $horaasig->save();
            return redirect()->route('horaasig')->with('Correcto', 'Se modificó correctamente');
        } catch (Exception $e) {
            return redirect()->route('horaasig')->with('Error', 'Error al modificar');
        }
    }


    public function delete($id)
    {
        try {

            $horaasig = HoraAsig::find($id);
            $horaasig->delete();
            return redirect()->route('horaasig')->with('Correcto', 'Se Eliminó  correctamente el registro');
        } catch (Exception $e) {
            return redirect()->route('horaasig')->with('Error', 'Error al Eliminar el registro');
        }
    }
}
