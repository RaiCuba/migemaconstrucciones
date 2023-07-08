<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DetalleVentaController;
use App\Models\ActEmp;
use App\Models\Asistencium;
use App\Models\CostoPro;
use App\Models\Producto;
use App\Models\DetalleVentum;
use App\Models\Imagen;
use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class HomeController extends Controller
{
    public function index()
    {
        $hoy = Carbon::now();
        $hoy = $hoy->format('Y-m-d');
        $cantidad = DetalleVentum::count();
        $cantidadproducto = CostoPro::count();
        $actemp = ActEmp::count();
        $asis = Asistencium::whereDate('fecha', $hoy)->count();
        $asistencias = Asistencium::all();
        $actividades = Imagen::all();

        //para imprimer el grafico
        $chart_option = [
            'chart_title' => 'Productos',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\DetalleVentum',


            'relationship_name' => 'producto',
            'group_by_field' => 'id_pro',


            // 'filter_field' => 'fecha',
            //'filter_days' => 500,
            // 'filter_period' => 'year',
        ];
        $chart = new LaravelChart($chart_option);

        return view('home.index', compact('chart', 'cantidad', 'hoy', 'cantidadproducto', 'actemp', 'asis', 'asistencias', 'actividades'));
    }

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
