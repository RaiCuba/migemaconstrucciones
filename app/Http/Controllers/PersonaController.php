<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exception;

use Livewire\Component;

class PersonaController extends Controller
{
    public $search;
    public function index()
    {
        $datos = Persona::paginate(10);
        // $datos = Persona::where('nombre', 'LIKE', '%' . $this->search . '%')
        //     ->orwhere('correo', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('persona.index', compact('datos'));
    }
    public function verform()
    {
        return view("persona.registrar");
    }
    public function formmodificar($id)
    {
        $persona = Persona::find($id);
        return view(" persona.modificar", compact('persona'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'textnombre' => ['required', 'max:15', 'unique:persona,nombre'],
                'textape' => ['required', 'max:25'],
                'textci' => ['required', 'max:11', 'unique:persona,ci'],
                'texttel' => ['required', 'max:13'],
                'textcorreo' => ['email', 'max:200', 'unique:persona,correo'],
                'textfecha' => ['required', 'date'],
            ],
            [
                'required' => 'Los campo con (*) es obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe'
            ]
        );
        try {


            $fecha = Carbon::now();

            $persona = new Persona();
            $persona->nombre = $request->post('textnombre');
            $persona->ape = $request->post('textape');
            $persona->ci = $request->post('textci');
            $persona->tel = $request->post('texttel');
            $persona->correo = $request->post('textcorreo');
            $persona->fecha_nac = $request->post('textfecha');
            $persona->fecha_reg = $fecha->format('d-m-Y');
            $sql = $persona->save();

            return redirect()->route('persona')->with('Correcto', 'Se registro correctamente');
        } catch (Exception $e) {

            return redirect()->route('persona')->with('Error', 'Error al registrar');
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
        // $request->validate(
        //     [
        //         'nombrem' => ['required', 'max:15', 'unique:persona,nombre'],
        //         'apem' => ['required', 'max:25'],
        //         'cim' => ['required', 'max:11', 'unique:persona,ci'],
        //         'telm' => ['required', 'max:13'],
        //         'correom' => ['email', 'max:200', 'unique:persona,correo'],
        //         'fecham' => ['required', 'date'],
        //     ],
        //     [
        //         'required' => 'El campo es obligatorio',
        //         'max' => 'El campo no puede tener mas de :max caracteres',
        //         'alpha' => 'El campo solo acepta letras',
        //         'unique' => 'El nombre y/o dato del cargo ya existe'
        //     ]
        // );
        try {
            $persona = Persona::find($id);
            $persona->nombre = $request->post('nombrem');
            $persona->ape = $request->post('apem');
            $persona->ci = $request->post('cim');
            $persona->tel = $request->post('telm');
            $persona->correo = $request->post('correom');
            $persona->fecha_nac = $request->post('fecham');

            $persona->save();
            return redirect()->route('persona')->with('Correcto', 'Se modificó correctamente');
        } catch (Exception $e) {
            return redirect()->route('persona')->with('Error', 'Error al modificar');
        }
    }

    public function delete(string $id)
    {
        try {
            $persona = Persona::find($id);
            $persona->delete();
            return redirect()->route('persona')->with('Correcto', 'Se Eliminó  correctamente el registro');
        } catch (Exception $e) {
            return redirect()->route('persona')->with('Error', 'Error al Eliminar el registro');
        }
    }
}
