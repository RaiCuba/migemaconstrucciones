<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Pai;
use App\models\Depertamento;
use Exception;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    //

    public function index()
    {
        $datos = Ciudad::orderby('nombre', 'asc')->paginate(5);
        return view('ciudad.index', compact('datos'));
    }
    public function obtenerpais()
    {
        $datos = Pai::all();
        return view('ciudad.registrar', compact('datos'));
    }

    public function verform()
    {
        $ciudad = Ciudad::all();
        return view("ciudad.registrar", compact('ciudad'));
    }
    public function formmodificar($iddep)
    {
        $ciudad = Ciudad::find($iddep);
        return view(" ciudad.modificar", compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'textciudad' => ['required', 'max:15'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
            ]
        );

        try {

            $ciudad = new Ciudad();
            $ciudad->id_dep = $request->post('ciudad_id');
            $ciudad->nombre = $request->post('textciudad');
            $ciudad->save();

            return redirect()->route('ciudad')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('ciudad')->with('Error', 'Error al registrar');
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
        $ciudad = Ciudad::find($id);
        $ciudad->id_dep = $request->post('textdepartemento');
        $ciudad->nombre = $request->post('textciudad');
        $ciudad->save();
        return redirect()->route('ciudad')->with('seccess', 'Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return redirect()->route('ciudad')->with('success', 'Se Elimino  correctamente el registro');
    }
}
