<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEmp;
use App\Models\TipoUsu;
class TipoEmpController extends Controller
{
    //
    public function index()
    {
        $datos = TipoEmp ::orderby('nombre','asc')->paginate(5);
        return view('tipo_emp.index',compact('datos'));
    
    }
    public function verform()
    {
        $tipoemp = TipoEmp::all(); 
        return view("tipo_emp.registrar", compact('tipoemp'));
       
    }
    public function formmodificar($iddep)
    {
        $tipoemp = TipoEmp ::find($iddep);
        return view(" tipo_emp.modificar",compact('tipoemp'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $tipoemp = new TipoEmp ();
        $tipoemp->id_tip_emp=$request->post('textid');
        $tipoemp->nombre=$request->post('texttipoemp');
        $tipoemp->estado='1';
        $tipoemp->save();

        return redirect()->route('tipoemp')->with('seccess','Se modifico correctamente');


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
        $tipoemp = TipoEmp::find($id);
        $tipoemp->id_tip_emp =$request->post('textid');
        $tipoemp->nombre=$request->post('texttipoemp');
        $tipoemp->save();
        return redirect()->route('tipoemp')->with('seccess','Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $tipoemp = TipoEmp::find($id);
        $tipoemp->delete();
        return redirect()->route('tipoemp')->with('success','Se Elimino  correctamente el registro');
    }
}
