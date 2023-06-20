<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LugarExt
 * 
 * @property int $id_lug_ext
 * @property string|null $lugar
 * @property string|null $descrip
 * 
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class LugarExt extends Model
{
	protected $table = 'lugar_ext';
	protected $primaryKey = 'id_lug_ext';
	public $timestamps = false;

	protected $fillable = [
		'lugar',
		'descrip'
	];

	public function materials()
	{
		return $this->hasMany(Material::class, 'id_lug_ext');
	}
}
