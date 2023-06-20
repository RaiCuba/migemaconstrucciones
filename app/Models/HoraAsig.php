<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HoraAsig
 * 
 * @property int $id_hor_asi
 * @property Carbon|null $hora_ent_m
 * @property Carbon|null $hora_sal_m
 * @property Carbon $hora_ent_t
 * @property Carbon $hora_sal_t
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class HoraAsig extends Model
{
	protected $table = 'hora_asig';
	protected $primaryKey = 'id_hor_asi';
	public $timestamps = false;

	protected $casts = [
		'hora_ent_m' => 'datetime',
		'hora_sal_m' => 'datetime',
		'hora_ent_t' => 'datetime',
		'hora_sal_t' => 'datetime',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'hora_ent_m',
		'hora_sal_m',
		'hora_ent_t',
		'hora_sal_t',
		'fecha',
		'estado'
	];

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'id_hor_asi');
	}
}
