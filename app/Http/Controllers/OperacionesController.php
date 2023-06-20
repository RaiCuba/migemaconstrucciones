<?php

namespace App\Http\Controllers;

use App\Models\Asistencium;
use App\Models\CostoPro;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class OperacionesController extends Controller
{

    public function coordenadas(){
        return view('asistencia.coordenadas');
    }
    public function registrarUbicacion(Request $request)
{
    // Obtener los valores de latitud y longitud del cuerpo de la petición
    $latitud = $request->input('latitud');
    $longitud = $request->input('longitud');

    // Guardar las coordenadas en la base de datos
    // Puedes usar tu modelo de base de datos correspondiente y el método save() o create()
    $ubicacion = new Asistencium();
    $ubicacion->latitud = $latitud;
    $ubicacion->longitud = $longitud;
    $ubicacion->save();

    return response()->json(['success' => true]);
}

    public function formulario(){
        return view('ventas.operaciones');
    }
    public function getproductos(){
        $productos = Producto::all();
        return view('ventas.opera1',compact('productos'));
    }
    public function formularioopera1(){
        $product = Producto::all();
        return view('ventas.opera1',compact('product'));
    }
    public function obtenerDescripcion($id)
    {
        // Obtener el valor de la base de datos según el ID seleccionado
        $producto = Producto::find($id);
        $descripcion = $producto ? $producto->descrip : '';

        // Retornar la descripción
        return $descripcion;
    }

    public function getDatos(Request $request)
        {
            //$paisId = $request->input('pais_id');
            //$pro = Producto::where('id_cos_pro', $paisId)->get();
           // return response()->json($pro);
            $paisId = $request->input('pais_id');
            $pro = CostoPro::where('id_cos_pro', $paisId)->get();
            return response()->json($pro);
          
        }
    public function getDatos1(Request $request)
        {
            $paisId = $request->input('pais_id');
            $pro = Producto::where('id_cos_pro', $paisId)->get();
            return response()->json($pro);
         
                // $datos = DB::select("select * from pais");
            //return view("pais.index")->with("datos", $datos);
        }
    public function calcular(Request $request)
    {
        // Obtener los valores enviados en el formulario
        $operacion = $request->input('operacion');
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        // Realizar los cálculos según la operación seleccionada
        $resultado = 0;

        if ($operacion == 'suma') {
            $resultado = $numero1 + $numero2;
        } elseif ($operacion == 'resta') {
            $resultado = $numero1 - $numero2;
        } elseif ($operacion == 'multiplicacion') {
            $resultado = $numero1 * $numero2;
        } elseif ($operacion == 'division') {
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                // Manejar la división por cero
                $resultado = 'Error: División por cero';
            }
        }

        // Retornar la vista con los resultados de los cálculos
        return view('ventas.operaciones')->with('resultado', $resultado);
    }
}
