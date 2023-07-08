<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpCar
 * 
 * @property int $id_emp_car
 * @property int|null $id_emp
 * @property int|null $id_car
 * @property string $descrip
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property Cargo|null $cargo
 * @property Empleado|null $empleado
 *
 * @package App\Models
 */
class EmpCar extends Model
{
	protected $table = 'emp_car';
	protected $primaryKey = 'id_emp_car';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'id_car' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_emp',
		'id_car',
		'descrip',
		'fecha',
		'estado'
	];

	public function cargo()
	{
		return $this->belongsTo(Cargo::class, 'id_car');
	}

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}


}
