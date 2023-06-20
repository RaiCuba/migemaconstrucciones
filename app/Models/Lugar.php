<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugar
 * 
 * @property int $id_lug
 * @property string|null $almacen
 * @property string|null $descrip
 * @property string|null $direccion
 * @property string|null $estado
 * 
 * @property Collection|ProLug[] $pro_lugs
 *
 * @package App\Models
 */
class Lugar extends Model
{
	protected $table = 'lugar';
	protected $primaryKey = 'id_lug';
	public $timestamps = false;

	protected $fillable = [
		'almacen',
		'descrip',
		'direccion',
		'estado'
	];

	public function pro_lugs()
	{
		return $this->hasMany(ProLug::class, 'id_lug');
	}
}
