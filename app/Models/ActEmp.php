<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ActEmp
 * 
 * @property int $id_act_emp
 * @property int|null $id_act
 * @property int|null $id_emp
 * @property Carbon|null $fecha_ini
 * @property Carbon|null $fecha_fin
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property Actividad|null $actividad
 * @property Empleado|null $empleado
 *
 * @package App\Models
 */
class ActEmp extends Model
{
	protected $table = 'act_emp';
	protected $primaryKey = 'id_act_emp';
	public $timestamps = false;

	protected $casts = [
		'id_act' => 'int',
		'id_emp' => 'int',
		'fecha_ini' => 'datetime',
		'fecha_fin' => 'datetime',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_act',
		'id_emp',
		'fecha_ini',
		'fecha_fin',
		'fecha',
		'estado'
	];

	public function actividad()
	{
		return $this->belongsTo(Actividad::class, 'id_act');
	}

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}
}
