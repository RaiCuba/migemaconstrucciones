<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function index()
    {
        $datos = Persona ::orderby('nombre','asc')->paginate(5);
        return view('persona.index',compact('datos'));
    
    }
    public function verform()
    {
        return view("persona.registrar");
       
    }
    public function formmodificar($iddep)
    {
        $persona = Persona ::find($iddep);
        return view(" persona.modificar",compact('persona'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fecha = Carbon::now();
        $persona = new Persona ();
        $persona->nombre=$request->post('textnombre');
        $persona->ape=$request->post('textape');
        $persona->ci=$request->post('textci');
        $persona->tel=$request->post('texttel');
        $persona->correo=$request->post('textcorreo');
        $persona->fecha_nac=$request->post('textfecha');
        $persona->fecha_reg=$fecha->format('d-m-Y');
        $persona->save();

        return redirect()->route('persona')->with('seccess','Se modifico correctamente');


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

        $persona = Persona::find($id);
        $persona->nombre=$request->post('textnombre');
        $persona->ape=$request->post('textape');
        $persona->ci=$request->post('textci');
        $persona->tel=$request->post('texttel');
        $persona->correo=$request->post('textcorreo');
        $persona->fecha_nac=$request->post('textfecha');
       
        $persona->save();

        return redirect()->route('persona')->with('seccess','Se modifico correctamente');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect()->route('persona')->with('success','Se Elimino  correctamente el registro');
    }
}
