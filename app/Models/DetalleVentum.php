<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVentum
 * 
 * @property int $id_det_ven
 * @property int|null $id_pro
 * @property int|null $id_ven
 * @property int|null $cantidad
 * @property Carbon|null $fecha
 * @property int|null $precio
 * @property string|null $descrip
 * @property int|null $total
 * 
 * @property Producto|null $producto
 * @property Ventum|null $ventum
 *
 * @package App\Models
 */
class DetalleVentum extends Model
{
	protected $table = 'detalle_venta';
	protected $primaryKey = 'id_det_ven';
	public $timestamps = false;

	protected $casts = [
		'id_pro' => 'int',
		'id_ven' => 'int',
		'cantidad' => 'int',
		'fecha' => 'datetime',
		'precio' => 'int',
		'total' => 'int'
	];

	protected $fillable = [
		'id_pro',
		'id_ven',
		'cantidad',
		'fecha',
		'precio',
		'descrip',
		'total'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_pro');
	}

	public function ventum()
	{
		return $this->belongsTo(Ventum::class, 'id_ven');
	}
}
