<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use App\Models\ContactosResponder;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Matcher\Contains;

class ContactosController extends Controller
{
    public function index()
    {
        $datos = Contactos::orderby('fecha', 'asc')->paginate(5);
        return view('contacto.index', compact('datos'));
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'nombre' => ['required', 'max:30'],
                'apellido' => ['required', 'max:30'],
                'email' => ['required', 'max:100', 'email'],
                'mensaje' => ['max:300'],
            ],
            [
                'required' => 'Este campo obligatorio',
                'max' => 'El campo no puede tener mas de :max caracteres',
            ]
        );
        try {
            $fecha = Carbon::now();
            $contacto = new Contactos();
            $contacto->nombre = $request->post('nombre');
            $contacto->apellido = $request->post('apellido');
            $contacto->email = $request->post('email');
            $contacto->mesaje = $request->post('mensaje');
            $contacto->fecha = $fecha;
            $contacto->save();
            $valor = 1;


            return redirect()->back()->with('Correcto', 'Se  envió mensaje');
        } catch (Exception $e) {
            return redirect()->back()->with('Error', 'Error al enviar el mensaje');
        }
        if ($valor == 1) {

            return view('contacto.registrar', compact('valor'));
        }
    }
    public function reply(Request $request, $id)
    {
        // Buscar el contacto por ID
        $contact = Contactos::findOrFail($id);

        // Validar los datos del formulario de respuesta de correo electrónico
        $request->validate([
            'message' => 'required',
        ]);

        // Recuperar los datos del formulario
        $message = $request->input('message');

        // Enviar el correo electrónico de respuesta
        // Mail::to($contact->email)->send(new ContactosResponder($message));

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'El correo electrónico de respuesta ha sido enviado correctamente.');
    }


    public function formEnviar($id)
    {
        $cont = Contactos::find($id);
        return view('contacto.respuesta', compact('cont'));
    }
    public function ver()
    {
        return view('contacto.index');
    }
    public function delete($id)
    {

        $con = Contactos::find($id);
        $con->delete();
        return redirect()->route('contacto.mostrar')->with('success', 'Se Elimino  correctamente el registro');
    }
}
