<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencium
 * 
 * @property int $id_asi
 * @property int|null $id_emp
 * @property int|null $id_log
 * @property int|null $id_ent_sal
 * @property Carbon|null $fecha
 * 
 * @property Empleado|null $empleado
 * @property Localizacion|null $localizacion
 * @property EntradaSalida|null $entrada_salida
 *
 * @package App\Models
 */
class Asistencium extends Model
{
	protected $table = 'asistencia';
	protected $primaryKey = 'id_asi';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'id_ent_sal' => 'int',
		'latitud' =>'decimal',
		'longitud' => 'decimal',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_emp',
		'id_ent_sal',
		'latitud',
		'longitud',
		'fecha'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}

	//public function localizacion()
	//{
	//	return $this->belongsTo(Localizacion::class, 'id_log');
	//}

	public function entrada_salida()
	{
		return $this->belongsTo(EntradaSalida::class, 'id_ent_sal');
	}
}
