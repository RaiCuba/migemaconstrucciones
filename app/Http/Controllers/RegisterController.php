<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\Empleado;
use App\Models\User;
use App\Models\Model_has_roles;
use Illuminate\Database\Events\ModelsPruned;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Spatie\Permission\Models\Roles;

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
    public function registrarrol(Request $request)
    {
        if ($request->has('empleado')) {

            $rol = new  Model_has_roles();
            $rol->role_id = $request->post('empleado');
            $rol->model_type = 'App\Models\User';
            $rol->model_id = $request->post('usuario');
            $rol->save();
            return redirect()->back()->with('Correcto', 'Se creo el rol de empleado');
        } elseif ($request->has('admin')) {
            $rol = new  Model_has_roles();
            $rol->role_id = $request->post('admin');
            $rol->model_type = 'App\Models\User';
            $rol->model_id = $request->post('usuario');
            $rol->save();
            return redirect()->back()->with('Correcto', 'Se creo el rol de adiminstrador');
        } else {
            return redirect()->back()->with('Error', 'Seleccione un rol');
        }
        // $rolesSeleccionados = $request->input('roles', []);

        // $usuario = new Model_has_roles();
        // $usuario->;
        // $usuario->model_id = $request->post('usuario');
        // $usuario->save();



        // $user->roles()->sync($request->roles);
        // print_r($request->post('usuario'));
        // dd($user);
        //return redirect()->back()->with('Correcto', 'Se creo el rol');


        // $rol = new Model_has_roles();
        // $rol->role_id = syncRole($roles);
        // $usuario->nombre = 'Nombre del Usuario';
        // $usuario->save();

        // $usuario->roles()->sync($roles);

        // if ($request->has('roles')) {
        //     if ($roles === 'Empleado') {
        //         return redirect()->back()->with('Correcto', 'rol de empleado');
        //     } elseif ($roles === 'Admin') {
        //         return redirect()->back()->with('Correcto', 'Rol de Admin');
        //     }
        //     return redirect()->back()->with('Correcto', 'Rol entro');
        // }
        // $usu = new  Model_has_roles();
        // $rol = $request->input('roles', []);
        // $ban = 0;

        // if ($request->has('empleado', [])) {

        //     $ban = $usu->role_id = 2;
        // }
        // if ($request->has('admin', [])) {
        //     $ban = $usu->role_id = 1;
        // }



        //     $usu->role_id = $rol;

        //     $usu->model_type = 'App\Models\User';
        //     $usu->model_id = $request->post('usuario');
        //     Dump($usu);
        //     //$usu->save();
        // } else {
        //     return redirect()->back()->with('Error', 'Debe seleccionar una opcion.');
        // }
    }
}
