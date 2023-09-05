<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Asistencium;
use App\Models\Cargo;
use App\Models\EmpCar;
use App\Models\Empleado;
use App\Models\HoraAsig;
use App\Models\TipoAct;
use App\Models\TipoEmp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadousuarioController extends Controller
{
    public function actividadempleado($id)
    {
        $actividad = Actividad::join('act_emp', 'act_emp.id_act', '=', 'actividad.id_act')
            ->join('empleado', 'empleado.id_emp', '=', 'act_emp.id_emp')
            ->join('persona', 'persona.id_per', '=', 'empleado.id_per')
            ->select('empleado.id_emp', 'actividad.id_act', 'persona.nombre', 'persona.ape', 'actividad.nombre as nombrea', 'actividad.lugar', 'actividad.descrip', DB::raw('(CASE WHEN actividad.estado = "1" THEN "Activo" WHEN actividad.estado = "2" THEN "En proceso" ELSE "Terminado" END) as estado'))
            ->where('empleado.id_emp', '=', $id)
            ->where('actividad.estado', '1')
            ->orwhere('actividad.estado', '2')
            ->orwhere('actividad.estado', '3')
            ->get();

        return view('empleadousuario.actividades.index', compact('actividad'));
    }
    public function asistenciaempleado($id)
    {
        $asistencias = Asistencium::join('entrada_salida', 'asistencia.id_ent_sal', '=', 'entrada_salida.id_ent_sal')
            ->join('empleado', 'empleado.id_emp', '=', 'asistencia.id_emp')
            ->join('persona', 'persona.id_per', '=', 'empleado.id_per')
            ->select('asistencia.id_asi', 'empleado.id_emp', 'persona.nombre', 'persona.ape', 'entrada_salida.hora_ent as hora_ent', 'entrada_salida.hora_ent as hora_sal', 'entrada_salida.fecha')
            ->where('empleado.id_emp', '=', $id)
            ->get();
        return view('empleadousuario.asistencia.index', compact('asistencias'));
    }
    public function realizaractividad($id)
    {
        $reaact = Actividad::find($id);
        $reaact->estado = '2';
        $reaact->save();
        $ac = $this->actividadempleado(auth()->user()->id_emp);
        return $ac;
    }
    public function terminaractividad($id)
    {
        $reaact = Actividad::find($id);
        $reaact->estado = '3';
        $reaact->save();
        $teract = $this->actividadempleado(auth()->user()->id_emp);
        return $teract;
    }
    public function datosempleado($id)
    {
        $empleado = Empleado::join('persona', 'persona.id_per', '=', 'empleado.id_per')
            ->join('users', 'users.id_emp', '=', 'empleado.id_emp')
            ->select('persona.nombre', 'persona.ape', 'persona.ci', 'persona.tel', 'persona.correo', 'persona.fecha_nac')
            ->where('users.id_emp', '=', $id)
            ->get();

        $tipo = TipoEmp::join('empleado', 'empleado.id_tip_emp', '=', 'tipo_emp.id_tip_emp')
            ->join('users', 'users.id_emp', '=', 'empleado.id_emp')
            ->select('tipo_emp.nombre as nombre')
            ->where('users.id_emp', '=', $id)
            ->get();
        $hora = HoraAsig::join('empleado', 'empleado.id_hor_asi', '=', 'hora_asig.id_hor_asi')
            ->join('users', 'users.id_emp', '=', 'empleado.id_emp')
            ->select('hora_asig.hora_ent_m', 'hora_asig.hora_sal_m', 'hora_asig.hora_ent_t', 'hora_asig.hora_sal_t')
            ->where('users.id_emp', '=', $id)
            ->get();
        $empcar = EmpCar::join('empleado', 'emp_car.id_emp', '=', 'empleado.id_emp')
            ->join('cargo', 'cargo.id_car', '=', 'emp_car.id_car')
            ->join('users', 'users.id_emp', '=', 'empleado.id_emp')
            ->select('cargo.nombre')
            ->where('users.id_emp', '=', $id)
            ->get();

        return view('empleadousuario.datos.index', compact('empleado', 'tipo', 'hora', 'empcar'));
    }
}
