<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Persona;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;

class ImagenController extends Controller
{
    public function index()
    {


        $imagen = Imagen::all();

        return view('imagen.index', compact('imagen'));
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
        $fecha = Carbon::now();
        //el try es para validar los datos para registrarse
        try {
            DB::beginTransaction();
            // pponer los registros
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
        // Validar la entrada del formulario

        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $img = new Imagen();
        $img->id_per = $request->post('persona');
        $img->name = $request->post('name');
        $img->imagenn = $request->post('imagen');
        if ($request->hasFile('imagen')) {
            $imagen = $request->file("imagen");
            $nombreimg = Str::slug($request->name) . "." . $imagen->guessExtension();
            $ruta = public_path("images/fotos");
            $imagen->move($ruta, $nombreimg);
            $img->imagenn = $nombreimg;
        }
        $img->fecha = $fecha;
        $img->save();
        // Redireccionar o mostrar una respuesta
        return redirect()->route('imagens.index')->with('seccess', 'Se modifico correctamente');
    }

    public function show(Imagen $image)
    {
        return view('imagen.index', compact('image'));
    }
    public function verformimg()
    {

        $personas = Persona::all();

        return view('imagen.registrar', compact('personas'));
    }
}
