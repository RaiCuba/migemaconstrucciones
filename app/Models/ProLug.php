<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProLug
 * 
 * @property int $id_pro_lug
 * @property int|null $id_pro
 * @property int|null $id_lug
 * 
 * @property Producto|null $producto
 * @property Lugar|null $lugar
 *
 * @package App\Models
 */
class ProLug extends Model
{
	protected $table = 'pro_lug';
	protected $primaryKey = 'id_pro_lug';
	public $timestamps = false;

	protected $casts = [
		'id_pro' => 'int',
		'id_lug' => 'int'
	];

	protected $fillable = [
		'id_pro',
		'id_lug'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_pro');
	}

	public function lugar()
	{
		return $this->belongsTo(Lugar::class, 'id_lug');
	}
}
