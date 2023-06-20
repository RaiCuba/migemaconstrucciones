<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Localizacion
 * 
 * @property int $id_log
 * @property string|null $latitud
 * @property string|null $longitud
 * @property Carbon|null $fecha
 * 
 * @property Collection|Asistencium[] $asistencia
 *
 * @package App\Models
 */
class Localizacion extends Model
{
	protected $table = 'localizacion';
	protected $primaryKey = 'id_log';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'latitud',
		'longitud',
		'fecha'
	];

	public function asistencia()
	{
		return $this->hasMany(Asistencium::class, 'id_log');
	}
}
