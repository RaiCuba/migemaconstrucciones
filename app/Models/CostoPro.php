<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CostoPro
 * 
 * @property int $id_cos_pro
 * @property int|null $id_cat
 * @property string|null $nombre
 * @property int|null $precio
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property Categorium|null $categorium
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class CostoPro extends Model
{
	protected $table = 'costo_pro';
	protected $primaryKey = 'id_cos_pro';
	public $timestamps = false;

	protected $casts = [
		'id_cat' => 'int',
		'precio' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_cat',
		'nombre',
		'precio',
		'fecha',
		'estado'
	];

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'id_cat');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_cos_pro');
	}
}
