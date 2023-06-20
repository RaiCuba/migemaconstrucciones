<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividad
 * 
 * @property int $id_act
 * @property int|null $id_tip_act
 * @property string $nombre
 * @property string|null $dia
 * @property string|null $mes
 * @property string|null $anio
 * @property string|null $descrip
 * @property string|null $lugar
 * @property string|null $estado
 * 
 * @property TipoAct|null $tipo_act
 * @property Collection|ActEmp[] $act_emps
 *
 * @package App\Models
 */
class Actividad extends Model
{
	protected $table = 'actividad';
	protected $primaryKey = 'id_act';
	public $timestamps = false;

	protected $casts = [
		'id_tip_act' => 'int'
	];

	protected $fillable = [
		'id_tip_act',
		'nombre',
		'dia',
		'mes',
		'anio',
		'descrip',
		'lugar',
		'estado'
	];

	public function tipo_act()
	{
		return $this->belongsTo(TipoAct::class, 'id_tip_act');
	}

	public function act_emps()
	{
		return $this->hasMany(ActEmp::class, 'id_act');
	}
}
