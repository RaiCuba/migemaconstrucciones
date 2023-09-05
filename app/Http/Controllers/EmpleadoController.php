<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Persona;
use App\Models\HoraAsig;
use App\Models\TipoEmp;
use App\Models\Cargo;
use App\Models\Depertamento;
use App\Models\EmpCar;
use App\Models\Empleado;
use App\Models\Pai;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Psy\Command\WhereamiCommand;

class EmpleadoController extends Controller
{
    public $search;
    public function index()
    {

        $paises = Pai::all();

        $datos = Empleado::where('id_emp', 'LIKE', '%' . $this->search . '%')
            ->where('estado', '=', '1')->paginate(10);
        return view('empleado.index', compact('datos', 'paises'));
    }
    // public function index()
    // {
    //     $datos = Empleado::orderby('id_emp', 'asc')->paginate(5);
    //     return view('empleado.index', compact('datos'));
    // }

    public function obtenerCiudades($paisId)
    {
        $ciudades = Depertamento::where('id_pai', $paisId)->get();
        return response()->json($ciudades);
    }

    public function asignarrol($id)
    {
        $idemp = Empleado::find($id);
        return view('usuario.asignarroles', compact('idemp'));
    }
    public function verform()
    {


        $personas = Persona::all();
        $tipoemp = TipoEmp::all();
        $horatra = HoraAsig::all();
        $cargos = Cargo::all();
        return view("empleado.registrar", compact('personas', 'tipoemp', 'horatra', 'cargos'));
    }
    public function formmodificar($id)
    {


        $emple = Empleado::find($id);
        // $personas = Persona::all();
        $tipoemp = TipoEmp::all();
        $horatra = HoraAsig::all();
        // $empleado = Empleado::find($iddep);
        // return view(" empleado.modificar", compact('empleado', 'personas', 'tipoemp', 'horatra'));
        return view(" empleado.modificar", compact('emple', 'tipoemp', 'horatra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        print_r($request->post('textpersona'));
        print_r('hora');

        $request->validate(
            [
                'textobservaciones' => ['required', 'max:100'],
                'textdescrip' => ['required', 'max:300'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );
        try {

            $resul = DB::table('empleado')->where('id_per', $request->post('textpersona'))->where('estado', '1')->exists();
            if ($resul != null) {

                return redirect()->route('empleado')->with('Error', ' Ya esta registrado como empleado la persona');
            } else {


                $fecha = Carbon::now();
                $empleado = new Empleado();
                $empleado->id_per = $request->post('textpersona');
                $empleado->id_tip_emp = $request->post('texttipoemp');
                $empleado->id_hor_asi = $request->post('texthoratra');
                $empleado->estado = '1';
                $empleado->observaciones = $request->post('textobservaciones');
                $empleado->fecha = $fecha;

                $empleado->save();


                //registrar con el empleado registraso el cargo de empleado;   
                $idEmpMax = DB::table('empleado')->max('id_emp');

                $empcar = new EmpCar();
                $empcar->id_emp = $idEmpMax;
                $empcar->id_car = $request->post('textcargo');
                $empcar->descrip = $request->post('textdescrip');
                $empcar->fecha = $fecha;
                $empcar->estado = '1';
                $empcar->save();
                return redirect()->route('empleado')->with('Correcto', 'Se Registro correctamente');
            }
        } catch (Exception $e) {
            return redirect()->route('empleado')->with('Error', 'Error al registrar');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $empleado = Empleado::find($id);
        $empleado->id_tip_emp = $request->post('texttipoemp');
        $empleado->id_hor_asi = $request->post('texthoratra');
        $empleado->observaciones = $request->post('textobservaciones');
        $empleado->save();
        return redirect()->route('empleado')->with('Correcto', 'Se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        try {
            // $empleado = Empleado::find($id);
            // $empleado->delete();
            $empl = Empleado::find($id);
            $empl->estado = '0';
            $empl->update();
            //eliminar usuario
            //$us = User::where('id_emp', $id);
            //$us->delete();

            return redirect()->route('empleado')->with('Correcto', 'Se Elimino  correctamente el registro');
        } catch (Exception $e) {
            return redirect()->route('empleado')->with('Error', 'No se pudo elimino el registro, debido que hay un usuario de este empleados');
        }
    }
}
