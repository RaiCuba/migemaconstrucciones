<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAct;
use Exception;

class TipoActController extends Controller
{
    //
    public function index()
    {
        $datos = TipoAct::orderby('nombre', 'asc')->paginate(5);
        return view('tipo_act.index', compact('datos'));
    }
    public function verform()
    {
        $tipoact = TipoAct::all();
        return view("tipo_act.registrar", compact('tipoact'));
    }
    public function formmodificar($iddep)
    {
        $tipoact = TipoAct::find($iddep);
        return view(" tipo_act.modificar", compact('tipoact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'texttipoact' => ['required', 'max:30'],
                'textdescrip' => ['required', 'max:100'],
            ],
            [
                'required' => 'Los campo con (*) es obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres'
            ]
        );

        try {

            $tipoact = new TipoAct();
            $tipoact->nombre = $request->post('texttipoact');
            $tipoact->descrip = $request->post('textdescrip');
            $tipoact->estado = '1';
            $tipoact->save();

            return redirect()->route('tipoact')->with('Correcto', 'Se registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('tipoact')->with('Error', 'Error al registrar ');
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
        $tipoact = TipoAct::find($id);
        $tipoact->id_tip_act = $request->post('textid');
        $tipoact->nombre = $request->post('texttipoact');
        $tipoact->descrip = $request->post('textdescrip');
        $tipoact->estado = '1';
        $tipoact->save();
        return redirect()->route('tipoact')->with('seccess', 'Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $tipoact = TipoAct::find($id);
        $tipoact->delete();
        return redirect()->route('tipoact')->with('success', 'Se Elimino  correctamente el registro');
    }
}
