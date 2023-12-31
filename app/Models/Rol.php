<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $id_rol
 * @property string|null $nombre
 * @property string|null $descrip
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descrip'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_rol');
	}
}
