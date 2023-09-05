<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\TipoAct;
use PhpParser\Node\Stmt\TryCatch;
use Exception;
use Illuminate\Support\Facades\DB;

class ActividadController extends Controller
{
    //
    public function index()
    {
        $datos = Actividad::join('tipo_act', 'tipo_act.id_tip_act', '=', 'actividad.id_tip_act')
            ->select('actividad.id_act', 'tipo_act.id_tip_act', 'actividad.nombre', 'actividad.dia', 'actividad.descrip', 'actividad.lugar', DB::raw('(CASE WHEN actividad.estado = "1" THEN "Activo" WHEN actividad.estado = "2" THEN "En proceso" ELSE "Terminados" END) as estado'))
            ->where('actividad.estado', '1')
            ->orwhere('actividad.estado', '2')
            ->orwhere('actividad.estado', '3')
            ->paginate(10);

        //$datos = Actividad::orderby('id_act', 'asc')->paginate(10);
        return view('actividad.index', compact('datos'));
    }
    public function verform()
    {
        $tipoact = TipoAct::all();
        return view("actividad.registrar", compact('tipoact'));
    }
    public function formmodificar($iddep)
    {
        $tipoact = TipoAct::all();

        $act = Actividad::find($iddep);
        return view(" actividad.modificar", compact('act', 'tipoact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $request->validate(
            [
                'textnombre' => ['required', 'max:50'],
                'textdia' => ['required', 'date'],
                'textdescrip' => ['required', 'max:200'],
                'textlugar' => ['required', 'max:30'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe'
            ]
        );

        try {
            $act = new Actividad();
            $act->id_tip_act = $request->post('texttipoactividad');
            $act->nombre = $request->post('textnombre');
            $act->dia = $request->post('textdia');
            $act->descrip = $request->post('textdescrip');
            $act->lugar = $request->post('textlugar');
            $act->estado = '1';
            $act->save();

            return redirect()->route('act')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('act')->with('Error', 'Error al registrar');
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

        $act = Actividad::find($id);
        $act->id_tip_act = $request->post('texttipoactividad1');
        $act->nombre = $request->post('textnombre');
        $act->dia = $request->post('textdia');
        $act->descrip = $request->post('textdescrip');
        $act->lugar = $request->post('textlugar');
        $act->estado = '1';
        $act->save();
        return redirect()->route('act')->with('Correcto', 'Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $act = Actividad::find($id);
        $act->estado = '0';
        $act->save();
        return redirect()->route('act')->with('Correcto', 'Se Elimino  correctamente el registro');
    }
}
