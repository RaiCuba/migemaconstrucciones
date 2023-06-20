<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\TipoAct;

class ActividadController extends Controller
{
    //
    public function index()
    {
        $datos = Actividad ::orderby('id_act','asc')->paginate(5);
        return view('actividad.index',compact('datos'));
    
    }
    public function verform()
    {
        $tipoact = TipoAct::all();
        return view("actividad.registrar",compact('tipoact'));
       
    }
    public function formmodificar($iddep)
    {
        $tipoact = TipoAct::all();

        $act = Actividad ::find($iddep);
        return view(" actividad.modificar",compact('act','tipoact'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $act = new Actividad ();
        $act->id_tip_act=$request->post('texttipoactividad');
        $act->nombre=$request->post('textnombre');
        $act->dia=$request->post('textdia');
        $act->mes=$request->post('textmes');
        $act->anio=$request->post('textanio');
        $act->descrip=$request->post('textdescrip');
        $act->lugar=$request->post('textlugar');
        $act->estado='1';
        $act->save();

        return redirect()->route('act')->with('seccess','Se modifico correctamente');


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

        $act = Actividad::find($id);
        $act->id_tip_act=$request->post('texttipoactividad1');
        $act->nombre=$request->post('textnombre');
        $act->dia=$request->post('textdia');
        $act->mes=$request->post('textmes');
        $act->anio=$request->post('textanio');
        $act->descrip=$request->post('textdescrip');
        $act->lugar=$request->post('textlugar');
        $act->estado='1';
        $act->save();
        return redirect()->route('act')->with('seccess','Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $act = Actividad::find($id);
        $act->delete();
        return redirect()->route('act')->with('success','Se Elimino  correctamente el registro');
    }
}
