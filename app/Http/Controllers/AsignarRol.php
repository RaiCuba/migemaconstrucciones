<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\User;
use App\Models\Roles;
use Spatie\Permission\Contracts\Role;

class AsignarRol extends Controller
{
    public $search;
    public function index()
    {
        $roles = Roles::all();

        $usu = User::join('empleado', 'empleado.id_emp', '=', 'users.id_emp')
            ->join('persona', 'persona.id_per', '=', 'empleado.id_per')
            ->select('users.id', 'empleado.id_emp', 'persona.nombre', 'persona.ape', 'persona.ci')
            ->where('empleado.estado', '1')
            // ->where('persona.nombre', 'LIKE', '%' . $this->search . '%')
            // ->orwhere('persona.ape', 'LIKE', '%' . $this->search . '%')
            ->get();
        return view('usuario.index', compact('usu', 'roles'));
    }
    public function verrol($id)
    {
        $roles = Roles::select('select p.nombre as nombre, p.ape as ape,r.name as name from model_has_roles mr, roles r, users u, empleado e, persona p WHERE r.id = mr.role_id and u.id=mr.model_id and u.id_emp = e.id_emp and p.id_per = e.id_per and u.id = ' . $id . ' ');
        // $roles = Roles::join('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
        //     ->where('model_has_roles.model_id', $id)
        //     ->get();

        return $roles;
        //return view('usuario.verrol', compact('roles'));
    }
}
