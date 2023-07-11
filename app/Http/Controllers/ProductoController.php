<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\CostoPro;
use App\Models\Empleado;
use App\Models\Lugar;
use App\Models\ProLug;
use Carbon\Carbon;
use Exception;

class ProductoController extends Controller
{
    //
    public function index()
    {

        // $datos = Producto::join('costo_pro', 'producto.id_cos_pro', '=', 'costo_pro.id_cos_pro')
        //     ->select('producto.id_pro', 'costo_pro.nombre', 'costo_pro.precio', DB::raw('SUM(producto.cantidad)'))
        //     ->where('producto.estado', 1)
        //     ->groupBy('costo_pro.nombre', 'producto.id_pro', 'costo_pro.precio', 'producto.cantidad')
        //     ->get();

        $datos = Producto::paginate(10);


        return view('producto.index', compact('datos'));
    }
    public function verform()
    {
        $lugares = Lugar::all();
        $empleados = Empleado::all();
        $costoprod = CostoPro::all();
        return view("producto.registrar", compact('costoprod', 'empleados', 'lugares'));
    }
    public function formmodificar($id)
    {
        $producto = Producto::find($id);
        $lugares = Lugar::all();
        $costoprod = CostoPro::all();
        $empleados = Empleado::all();
        return view("producto.modificar", compact('costoprod', 'empleados', 'lugares', 'producto'));
    }
    public function create(Request $request)
    {

        // $exi = CostoPro::where('id_cos_pro', $request->post('textco7stoprod'))->exists();
        // if ($exi == null) {

        //     echo 'Error 02';
        // } else {
        //     echo 'if2 se emcontro';
        // }




        $request->validate(
            [
                'textcantidad' => ['required', 'numeric'],
                'textdescripcion' => ['required', 'max:100'],
            ],
            [
                'required' => 'Los campo con (*) es obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
                'alpha' => 'El campo solo acepta letras',
                'unique' => 'El nombre y/o dato del cargo ya existe',
                'numeric' => 'Ingrese solo números'
            ]
        );
        try {
            //registrar la tabla de productos
            $fechas = Carbon::now();
            $producto = new Producto();
            $producto->id_emp = 13; // $request->post('textempleado');
            $producto->id_cos_pro = $request->post('textcostoprod');
            $producto->cantidad = $request->post('textcantidad');
            $producto->descrip = $request->post('textdescripcion');
            $producto->estado = '1';
            $producto->fecha = $fechas;
            $producto->save();

            //registrar pro_lug;   
            $idProMax = DB::table('producto')->max('id_pro');

            $prolug = new ProLug();
            $prolug->id_pro = $idProMax;
            $prolug->id_lug = $request->post('textlugar');
            $prolug->save();

            return redirect()->route('producto')->with('Correcto', 'Se Registro correctamente');
        } catch (Exception $e) {
            return redirect()->route('producto')->with('Error', 'Error al Registrar ');
        }
    }


    public function update(Request $request, $id)
    {

        $producto = Producto::find($id);
        $producto->id_emp = $request->post('textempleado');
        $producto->id_cos_pro = $request->post('textcostoprod');
        $producto->cantidad = $request->post('textcantidad');
        $producto->descrip = $request->post('textdescripcion');
        $producto->save();

        return redirect()->route('producto')->with('seccess', 'Se modifico correctamente');
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

        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto')->with('success', 'Se Elimino  correctamente el registro');
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
}
