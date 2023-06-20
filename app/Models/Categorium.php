<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 * 
 * @property int $id_cat
 * @property string|null $nombre
 * @property string|null $descrip
 * @property string|null $estado
 * 
 * @property Collection|CostoPro[] $costo_pros
 *
 * @package App\Models
 */
class Categorium extends Model
{
	protected $table = 'categoria';
	protected $primaryKey = 'id_cat';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descrip',
		'estado'
	];

	public function costo_pros()
	{
		return $this->hasMany(CostoPro::class, 'id_cat');
	}
}
