<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EntradaSalida
 * 
 * @property int $id_ent_sal
 * @property int|null $hora_ent
 * @property int|null $hora_sal
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property Collection|Asistencium[] $asistencia
 *
 * @package App\Models
 */
class EntradaSalida extends Model
{
	protected $table = 'entrada_salida';
	protected $primaryKey = 'id_ent_sal';
	public $timestamps = false;

	protected $casts = [
		'hora_ent' => 'datetime',
		'hora_sal' => 'datetime',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'hora_ent',
		'hora_sal',
		'fecha',
		'estado'
	];

	public function asistencia()
	{
		return $this->hasMany(Asistencium::class, 'id_ent_sal');
	}
}
