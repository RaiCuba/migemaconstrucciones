<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Cargo;
use App\Models\EmpCar;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class EmpCarController extends Controller
{
    public function index()
    {
        $datos = EmpCar::orderby('id_emp_car', 'asc')->paginate(10);
        return view('emp_car.index', compact('datos'));
        // $datos = DB::select("select * from pais");
        //return view("pais.index")->with("datos", $datos);
    }
    public function verform()
    {
        $empleados = Empleado::all();
        $cargos = Cargo::all();

        return view("emp_car.registrar", compact('empleados', 'cargos'));
    }
    public function formmodificar($idpai)
    {
        $empleados = Empleado::all();
        $cargos = Cargo::all();

        $empcar = EmpCar::find($idpai);
        return view("emp_car.modificar", compact('empcar', 'empleados', 'cargos'));
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'textdescrip' => ['required', 'max:300'],
            ],
            [
                'required' => 'El Nombre del Cago es obligatorio.',
                'max' => ':El campo no puede tener mas de :max caracteres.'
            ]
        );

        try {
            $fecha = Carbon::now();

            $empcar = new EmpCar();
            $empcar->id_emp = $request->post('textempleado');
            $empcar->id_car = $request->post('textcargo');
            $empcar->descrip = $request->post('textdescrip');
            $empcar->fecha = $fecha;
            $empcar->estado = '1';
            $empcar->save();

            return redirect()->route('empleado')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('empleado')->with('Error', 'Error al Registrar');
        }
    }


    public function update(Request $request, $id)
    {

        $empcar = EmpCar::find($id);
        $empcar->id_emp = $request->post('textempleado');
        $empcar->id_car = $request->post('textcargo');
        $empcar->descrip = $request->post('textdescrip');
        $empcar->save();
        return redirect()->route('empcar')->with('seccess', 'Se modifico correctamente');
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

        $empcar = EmpCar::find($id);
        $empcar->delete();
        return redirect()->route('empcar')->with('success', 'Se Elimino  correctamente el registro');
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
