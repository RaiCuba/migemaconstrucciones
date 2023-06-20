<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\HoraAsig;
use App\Models\TipoEmp;
use App\Models\Cargo;
use App\Models\EmpCar;
use App\Models\Empleado;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index()
    {
        $datos = Empleado ::orderby('id_emp','asc')->paginate(5);
        return view('empleado.index',compact('datos'));
    
    }
    public function verform()
    {
        $personas = Persona::all(); 
        $tipoemp = TipoEmp::all();
        $horatra = HoraAsig::all();
        $cargos = Cargo::all();
        return view("empleado.registrar", compact('personas','tipoemp','horatra','cargos'));
       
    }
    public function formmodificar($iddep)
    {
        $personas = Persona::all(); 
        $tipoemp = TipoEmp::all();
        $horatra = HoraAsig::all();
        $empleado = Empleado ::find($iddep);
        return view(" empleado.modificar",compact('empleado','personas','tipoemp','horatra'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fecha = Carbon::now(); 
        $empleado = new Empleado ();
        $empleado->id_per=$request->post('textpersona');
        $empleado->id_tip_emp=$request->post('texttipoemp');
        $empleado->id_hor_asi=$request->post('texthoratra');
        $empleado->estado='1';
        $empleado->observaciones=$request->post('textobservaciones');
        $empleado->fecha = $fecha;
        
        $empleado->save();


        //registrar con el empleado registraso el cargo de empleado;   
        $idEmpMax = DB::table('empleado')->max('id_emp'); 
        
        $empcar = new EmpCar();
        $empcar->id_emp= $idEmpMax;
        $empcar->id_car=$request->post('textcargo');
        $empcar->descrip=$request->post('textdescrip');
        $empcar->fecha = $fecha;
        $empcar->estado='1';
        $empcar->save();
        return redirect()->route('empleado')->with('seccess','Se modifico correctamente');


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
        $empleado->id_per=$request->post('textpersona');
        $empleado->id_tip_emp=$request->post('texttipoemp');
        $empleado->id_hor_asi=$request->post('texthoratra');
        $empleado->observaciones=$request->post('textobservaciones');
        $empleado->save();
        return redirect()->route('empleado')->with('seccess','Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleado')->with('success','Se Elimino  correctamente el registro');
    }
}
