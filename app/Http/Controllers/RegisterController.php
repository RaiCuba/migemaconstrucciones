<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\Empleado;
use App\Models\User;

class RegisterController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            return redirect('/home');
        }

        return view('cliente.index');
    }
    public function register(RegisterRequest $request)
    {
        if (Auth::check()) {
            $user = User::create($request->validated());

            return redirect('./home')->with('success', 'Cuenta creada correctamente');
        }
    }
    public function registroform()
    {
        $empleados = Empleado::where('estado', '1')->get();
        return view('usuario.register', compact('empleados'));
    }
}
