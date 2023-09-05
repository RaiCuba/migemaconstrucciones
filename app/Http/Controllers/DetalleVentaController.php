<?php

namespace App\Http\Controllers;

use App\Models\CostoPro;
use App\Models\Depertamento;
use Illuminate\Support\Facades\DB;
use App\Models\DetalleVentum;
use App\Models\Lugar;
use App\Models\Pai;
use App\Models\Producto;
use App\Models\User;
use App\Models\Ventum;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        // $datos = DetalleVentum::paginate(10);
        // return view('ventas.index', compact('datos'));
        $datos = DetalleVentum::join('producto', 'producto.id_pro', '=', 'detalle_venta.id_pro')
            ->join('costo_pro', 'costo_pro.id_cos_pro', '=', 'producto.id_cos_pro')
            ->select('detalle_venta.id_det_ven', 'costo_pro.nombre', 'detalle_venta.cantidad', 'detalle_venta.precio', 'detalle_venta.total', 'detalle_venta.fecha')
            ->get();
        return view('ventas.index', compact('datos'));

        // $datos = DB::select("select * from pais");
        //return view("pais.index")->with("datos", $datos);
    }


    public function getDatos(Request $request)
    {
        $paisId = $request->input('pais_id');
        $pro = Producto::where('id_pro', $paisId)->get();
        return response()->json($pro);
    }
    public function getCostoPro(Request $request)
    {
        $dato = $request->input('opcion');
        return view('ventas')->with('dato', $dato);
    }
    public function verform()
    {
        $paises = Pai::all();
        $lugares = Lugar::all();
        $productos = Producto::all();
        return view("ventas.registrar", compact('productos', 'lugares', 'paises'));
    }
    public function formmodificar($id)
    {
        $detalleventa = DetalleVentum::find($id);
        $venta = Ventum::all();
        return view("ventas.modificar", compact('venta'));
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'valor' => ['required', 'numeric'],
                'precio' => ['required', 'numeric'],
                'descripcion' => ['max:50'],
                'resultado' => ['required', 'numeric'],
            ],
            [
                'required' => 'El Nombre del Cago es obligatorio', 'Llene.',
                'max' => ':El campo no puede tener mas de :max caracteres.',
                'numeric' => 'Engrese solo números.'

            ]
        );
        try {

            $nroventa = DB::table('venta')->max('nro');
            //registrar la tabla de productos
            $fechas = Carbon::now();
            $venta = new Ventum();
            $venta->id_usu = auth()->user()->id;
            $venta->nro = $nroventa + 1;
            $venta->estado = '1';
            $venta->fecha = $fechas;
            $venta->save();
            $nroventa = 0;
            //registrar pro_lug;   
            $idProMax = DB::table('venta')->max('id_ven');

            $ventas = new DetalleVentum();
            $ventas->id_pro = $request->post('id');
            $ventas->id_ven = $idProMax;
            $ventas->cantidad = $request->post('valor');
            $ventas->fecha = $fechas;
            $ventas->precio = $request->post('precio');
            $ventas->descrip = $request->post('descripcion');
            $ventas->total = $request->post('resultado');
            $ventas->save();

            //restar cantidad de producto vendido
            $proven = Producto::find($request->post('id'));
            $cantidad = $proven->cantidad;

            $proven->cantidad = $cantidad - $request->post('valor');
            $proven->save();

            return redirect()->route('ventas')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('ventas')->with('Error', 'Error al registrar');
        }
    }


    public function update(Request $request, $id)
    {

        $ventas = DetalleVentum::find($id);
        $ventas->id_pro = $request->post('textproducto');
        $ventas->cantidad = $request->post('textcantidad');
        $ventas->precio = $request->post('textprecio');
        $ventas->descrip = $request->post('textdescrip');
        $ventas->total = $request->post('texttotal');
        $ventas->save();

        return redirect()->route('ventas')->with('success', 'Se Registro correctamente');
        // try{
        // $sql = DB::update("update pais set nombre=? where id_pai=?",[

        //         $request->textpais,
        //         $request->textid,

        //     ]);  
        //      //para validar midificar cuando no tocamos los registro
        //     if($sql ==0) {
        //         $sql ==1;
        //     }
        // }catch (\Throwable $th)
        // {
        //     $sql =0;
        // }
        //     if ($sql == true) {
        //         return back()->with("Correcto","Se Modifico el Pais correctamente");
        //     } else {
        //         return back()->with("Error","Error al modificar");

        //     }
    }


    public function delete($id)
    {

        $ventas = DetalleVentum::find($id);
        $ventas->delete();
        return redirect()->route('ventas')->with('success', 'Se Elimino  correctamente el registro');
        // try{
        // $sql = DB::delete("delete from pais where id_pai=$id");           
        // }catch (\Throwable $th)
        // {
        //     $sql =0;
        // }
        //     if ($sql == true) {
        //         return back()->with("Correcto","Se elimino El pais correctamente");
        //     } else {
        //         return back()->with("Error","Error al eliminar");

        //     }
    }
    public function index1()
    {
        $paises = Pai::all();
        return view('ventas.select', compact('paises'));
    }

    public function obtenerCiudades($paisId)
    {
        $ciudades = Depertamento::where('id_pai', $paisId)->get();
        return response()->json($ciudades);
    }
}
