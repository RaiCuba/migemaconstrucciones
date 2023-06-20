<?php

namespace App\Http\Controllers;

use App\Models\Asistencium;
use App\Models\EntradaSalida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    public function index(){
        return view('/asistencia.registrar');
    }
  

    public function ubi(){

        $coordenadas = Asistencium::all();

        return view('asistencia.ubicacion',compact('coordenadas'));
            
        
    }
    public function guardarCoordenadas(Request $request)
    {
        // Validar los datos del formulario si es necesario

        // Crear una nueva instancia del modelo Coordenada
        $coordenada = new Asistencium();
        $coordenada->latitud = $request->latitud;
        $coordenada->longitud = $request->longitud;
        $coordenada->save();

        return response()->json(['success' => true, 'message' => 'Coordenadas guardadas correctamente']);
    }
    public function registrarAsistencia(Request $request)
    {
        $horaActual = now()->format('H:i:s');

    
        // Obtener los datos de la asistencia, incluyendo las coordenadas de GPS
        $nombre = $request->input('empleado');
        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');

        //registro de entrada salida
        $ent = new  EntradaSalida();
        $ent->hora_ent = $horaActual;
        $ent->hora_sal = $horaActual;
        $ent->fecha = now();
        $ent->estado ='1';
        $ent->save();

        $identMax = DB::table('entrada_salida')->max('id_ent_sal'); 

        // Crear una nueva instancia del modelo Asistencia
        $asistencia = new Asistencium();
        $asistencia->id_emp = $nombre;
        $asistencia->id_ent_sal = $identMax;
        $asistencia->latitud = $latitud;
        $asistencia->longitud = $longitud;
        print_r($latitud);
        print_r($longitud);
        $asistencia->fecha = now();
        $asistencia->save();

        return redirect()->back()->with('success', 'Asistencia registrada correctamente.');
    }

    public function mostrarUbicacion($id)
    {
        // Obtener los datos de la asistencia según el ID
        $asistencia = Asistencium::findOrFail($id);

        // Pasar los datos a la vista
        return view('ubicacion')->with('asistencia', $asistencia);
    }
}
