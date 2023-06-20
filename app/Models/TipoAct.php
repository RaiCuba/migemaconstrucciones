<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAct
 * 
 * @property int $id_tip_act
 * @property string|null $nombre
 * @property string|null $descrip
 * @property string|null $estado
 * 
 * @property Collection|Actividad[] $actividads
 *
 * @package App\Models
 */
class TipoAct extends Model
{
	protected $table = 'tipo_act';
	protected $primaryKey = 'id_tip_act';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descrip',
		'estado'
	];

	public function actividads()
	{
		return $this->hasMany(Actividad::class, 'id_tip_act');
	}
}
