<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        //return view('cliente.index');
        return view('usuario.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect('./login')->with('success', 'Cuenta creada correctamente');
    }
}
