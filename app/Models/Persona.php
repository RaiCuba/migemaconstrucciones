<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id_per
 * @property string|null $nombre
 * @property string|null $ape
 * @property string|null $ci
 * @property string|null $tel
 * @property string|null $correo
 * @property Carbon|null $fecha_nac
 * @property Carbon|null $fecha_reg
 * 
 * @property Collection|Direccion[] $direccions
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'persona';
	protected $primaryKey = 'id_per';
	public $timestamps = false;

	protected $casts = [
		'fecha_nac' => 'datetime',
		'fecha_reg' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'ape',
		'ci',
		'tel',
		'correo',
		'fecha_nac',
		'fecha_reg'
	];

	public function direccions()
	{
		return $this->hasMany(Direccion::class, 'id_per');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'id_per');
	}
}
