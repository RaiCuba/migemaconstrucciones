<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 * 
 * @property int $id_prov
 * @property string|null $nombre
 * @property string|null $organizacion
 * @property string|null $nit
 * @property string|null $descrip
 * @property string|null $estado
 * 
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedor';
	protected $primaryKey = 'id_prov';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'organizacion',
		'nit',
		'descrip',
		'estado'
	];

	public function materials()
	{
		return $this->hasMany(Material::class, 'id_prov');
	}
}
