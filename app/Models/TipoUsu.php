<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsu
 * 
 * @property int $id_tip_usu
 * @property string|null $nombre
 * @property string|null $descrip
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class TipoUsu extends Model
{
	protected $table = 'tipo_usu';
	protected $primaryKey = 'id_tip_usu';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descrip'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_tip_usu');
	}
}
