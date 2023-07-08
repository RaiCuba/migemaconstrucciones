<?php

namespace App\Http\Controllers;

use App\Models\Depertamento;
use App\Models\Pai;
use Exception;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Depertamento::orderby('nombre', 'asc')->paginate(10);
        return view('departamento.index', compact('datos'));
    }
    public function verform()
    {
        $paises = Pai::all();
        return view("departamento.registrar", compact('paises'));
    }
    public function formmodificar($iddep)
    {
        $departamento = Depertamento::find($iddep);
        return view(" departamento.modificar", compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'textdepartamento' => ['required', 'max:15'],
            ],
            [
                'required' => 'El Nombre del Cago es obligatorio', 'Llene.',
                'max' => ':El campo no puede tener mas de :max caracteres.',
            ]
        );
        try {
            $departamento = new Depertamento();
            $departamento->id_pai = $request->post('textpais');
            $departamento->nombre = $request->post('textdepartamento');
            $departamento->save();

            return redirect()->route('departamento')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('departamento')->with('Error', 'Error al regitrar');
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
        $departamento = Depertamento::find($id);
        $departamento->id_pai = $request->post('textid_pai');
        $departamento->nombre = $request->post('textdepartemento');
        $departamento->save();
        return redirect()->route('departamento')->with('seccess', 'Se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $departamento = Depertamento::find($id);
        $departamento->delete();
        return redirect()->route('departamento')->with('success', 'Se Elimino  correctamente el registro');
    }
}
