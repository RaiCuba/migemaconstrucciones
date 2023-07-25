<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Asistencium;
use App\Models\Empleado;
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
}
