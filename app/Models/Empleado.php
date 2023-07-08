<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $id_emp
 * @property int|null $id_per
 * @property int|null $id_tip_emp
 * @property int|null $id_hor_asi
 * @property Carbon|null $fecha
 * @property string|null $estado
 * @property string|null $observaciones
 * 
 * @property Persona|null $persona
 * @property TipoEmp|null $tipo_emp
 * @property HoraAsig|null $hora_asig
 * @property Collection|ActEmp[] $act_emps
 * @property Collection|Asistencium[] $asistencia
 * @property Collection|EmpCar[] $emp_cars
 * @property Collection|Producto[] $productos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleado';
	protected $primaryKey = 'id_emp';
	public $timestamps = false;

	protected $casts = [
		'id_per' => 'int',
		'id_tip_emp' => 'int',
		'id_hor_asi' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_per',
		'id_tip_emp',
		'id_hor_asi',
		'fecha',
		'estado',
		'observaciones'
	];



	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_per');
	}

	public function tipo_emp()
	{
		return $this->belongsTo(TipoEmp::class, 'id_tip_emp');
	}

	public function hora_asig()
	{
		return $this->belongsTo(HoraAsig::class, 'id_hor_asi');
	}

	public function act_emps()
	{
		return $this->hasMany(ActEmp::class, 'id_emp');
	}

	public function asistencia()
	{
		return $this->hasMany(Asistencium::class, 'id_emp');
	}

	public function emp_cars()
	{
		return $this->hasMany(EmpCar::class, 'id_emp');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_emp');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_emp');
	}
}
