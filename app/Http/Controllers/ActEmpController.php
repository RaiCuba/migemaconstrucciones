<?php

namespace App\Http\Controllers;

use App\Models\ActEmp;
use App\Models\Actividad;
use App\Models\Empleado;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActEmpController extends Controller
{
    //
    public function index()
    {
        $datos = ActEmp::orderby('fecha', 'asc')->paginate(5);
        return view('actemp.index', compact('datos'));
    }
    public function verform()
    {
        $actividad = Actividad::all();
        $empleado = Empleado::all();
        return view("actemp.registrar", compact('actividad', 'empleado'));
    }
    public function formmodificar($iddep)
    {
        $actividad = Actividad::all();
        $empleado = Empleado::all();
        $actemp = ActEmp::find($iddep);
        return view(" actividad.modificar", compact('actemp', 'actividad', 'empleado'));
    }
    public function create(Request $request)
    {
        $fecha = Carbon::now();
        $actemp = new ActEmp();
        $actemp->id_act = $request->post('actividad');
        $actemp->id_emp = $request->post('empleado');
        $actemp->fecha_ini = $request->post('fechaini');
        $actemp->fecha_fin = $request->post('fechafin');
        $actemp->fecha = $fecha;
        $actemp->estado = '1';
        $actemp->save();

        return redirect()->route('actemp')->with('seccess', 'Se modifico correctamente');
    }
    public function update(Request $request, $id)
    {

        $actemp = ActEmp::find($id);
        $actemp->id_act = $request->post('actividad');
        $actemp->id_emp = $request->post('empleado');
        $actemp->fecha_ini = $request->post('fechaini');
        $actemp->fecha_fin = $request->post('fechafin');
        $actemp->save();

        return redirect()->route('actemp')->with('seccess', 'Se modifico correctamente');
    }
    public function delete(string $id)
    {
        $actemp = ActEmp::find($id);
        $actemp->delete();
        return redirect()->route('actemp')->with('success', 'Se Elimino  correctamente el registro');
    }
}
