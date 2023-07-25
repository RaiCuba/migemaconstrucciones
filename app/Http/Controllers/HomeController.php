<?php

namespace App\Http\Controllers;

use Redirect, Response;
use Illuminate\Http\Request;
use App\Http\Controllers\DetalleVentaController;
use App\Models\ActEmp;
use App\Models\Actividad;
use App\Models\Asistencium;
use App\Models\CostoPro;
use App\Models\Producto;
use App\Models\DetalleVentum;
use App\Models\Imagen;
use App\Models\Lugar;
use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class HomeController extends Controller
{
    public function obtenerOpciones($valor)
    {
        $opciones = Lugar::where('id_lug', $valor)->pluck('almacen', 'id_lug'); // Ajusta los nombres según tu estructura de base de datos

        return response()->json($opciones);
    }
    public function sele()
    {
        return view('home.selectdependientes');
    }
    public function tablas()
    {
        return view('home.tabledate');
    }
    public function index()
    {
        $hoy = Carbon::now();
        $hoy = $hoy->format('Y-m-d');
        $cantidad = DetalleVentum::count();
        $cantidadproducto = CostoPro::count();
        $actemp = ActEmp::count();
        $asis = Asistencium::whereDate('fecha', $hoy)->count();
        $asistencias = Asistencium::whereDate('fecha', '=', now()->toDateString())->get();


        $actividades = Actividad::join('act_emp', 'act_emp.id_act', '=', 'actividad.id_act')
            ->join('empleado', 'empleado.id_emp', '=', 'act_emp.id_emp')
            ->join('persona', 'persona.id_per', '=', 'empleado.id_per')
            ->select('empleado.id_emp', 'actividad.id_act', 'persona.nombre', 'persona.ape', 'actividad.nombre as nombrea', 'actividad.lugar', 'act_emp.fecha', DB::raw('(CASE WHEN actividad.estado = "1" THEN "Activo" WHEN actividad.estado = "2" THEN "En proceso" ELSE "Terminado" END) as estado'))
            ->get();



        //imprimir graficos Costo_pro
        $record = DB::select("select sum(p.cantidad) as 'cantidad', ucase(cp.nombre) as 'nombre' FROM producto p, costo_pro cp where p.id_cos_pro = cp.id_cos_pro GROUP BY(nombre)");
        $data = [];
        foreach ($record as $row) {
            $data['label'][] = $row->nombre;
            // $data['data'][] = (int) $row->precio;
            $data['data'][] = (int) $row->cantidad;
        }
        $data['chart_data'] = json_encode($data);
        //para imprimer el grafico
        $chart_option = [
            'chart_title' => 'Productos',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\DetalleVentum',
            'relationship_name' => 'producto',
            'group_by_field' => 'id_pro',
        ];
        $chart = new LaravelChart($chart_option);

        return view('home.index', $data, compact('chart', 'cantidad', 'hoy', 'cantidadproducto', 'actemp', 'asis', 'asistencias', 'actividades'));
    }
    public function grafico()
    {
        $record = DB::select("select sum(p.cantidad) as 'cantidad', ucase(cp.nombre) as 'nombre' FROM producto p, costo_pro cp where p.id_cos_pro = cp.id_cos_pro GROUP BY(nombre)");

        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->nombre;
            // $data['data'][] = (int) $row->precio;
            $data['data'][] = (int) $row->cantidad;
        }

        $data['chart_data'] = json_encode($data);
        return view('home.grafico', $data);
    }
    public function ventas()
    {
    }

    //     $movimientos = Movimiento::selectRaw('SUM(movimientos.cantidad) + SUM(otraTabla.otracolumna) AS Total,
    //     movimientos.codigo_material,
    //     diferencias.cantidad
    // ')
    // ->join('diferencias','diferencias.codigo_material','=','movimientos.codigo_material') 
    // ->groupBy('movimientos.codigo_material', 'diferencias.cantidad') 
    // ->get();


    // public function mostrarGrafica()
    // {
    //     $datos = DetalleVentum::all();

    //     $chart = Charts::database($datos,'bar','highcharts')
    //     ->title('ventas')
    //     ->elementLabel('etiqueta del elemento')
    //     ->dimensions(500, 300)
    //     ->groupBy('id_pro')
    //     ->render();
    // }
}
