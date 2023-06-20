<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 * 
 * @property int $id_com
 * @property int|null $id_usu
 * @property int|null $cantidad
 * @property int|null $costo
 * @property Carbon|null $fecha
 * 
 * @property Usuario|null $usuario
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class Compra extends Model
{
	protected $table = 'compra';
	protected $primaryKey = 'id_com';
	public $timestamps = false;

	protected $casts = [
		'id_usu' => 'int',
		'cantidad' => 'int',
		'costo' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_usu',
		'cantidad',
		'costo',
		'fecha'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usu');
	}

	public function materials()
	{
		return $this->hasMany(Material::class, 'id_com');
	}
}
