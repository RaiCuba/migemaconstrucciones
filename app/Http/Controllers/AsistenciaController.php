<?php

namespace App\Http\Controllers;

use App\Models\Asistencium;
use App\Models\EntradaSalida;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    public function index()
    {

        $datos = Asistencium::orderby('fecha', 'desc')->paginate(10);

        //para imprimir en pantalla
        //$datos = DB::table('asistencia')->select('latitud', 'longitud')->get();

        return view('/asistencia.index')->with('datos', $datos);
    }
    public function prueba()
    {
        return view('asistencia.mapprueba');
    }
    public function Verformregistrar()
    {
        return view('asistencia.registrar');
    }

    public function verubicacion($id)
    {

        $asis = Asistencium::find($id);

        // Pasar los datos a la vista
        return view('asistencia.ubicacion')->with('asis', $asis);
    }
    public function store(Request $request)
    {


        $emp = $request->input('empleado');
        $fecha = Carbon::now();
        $horaActual = now()->format('H:i:s');


        $entrasali = new EntradaSalida();
        $entrasali->hora_ent = $horaActual;
        $entrasali->hora_sal = 0;
        $entrasali->fecha = $fecha;
        $entrasali->estado = '1';
        $entrasali->save();

        $identMax1 = DB::table('entrada_salida')->max('id_ent_sal');


        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');

        $asistencia = new Asistencium();
        $asistencia->id_emp = auth()->user()->id_emp;
        $asistencia->id_ent_sal = $identMax1;
        $asistencia->latitud = $latitud;
        $asistencia->longitud = $longitud;
        $asistencia->fecha = $fecha;


        $asistencia->save();
        return redirect()->route('asistencia')->with('success', 'Se Registro correctamente');
        // return redirect()->route('cargo')->with('Correcto', 'Se Registro correctamente');


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
        $ent->estado = '1';
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
