<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_pro
 * @property int|null $id_emp
 * @property int|null $id_cos_pro
 * @property int|null $cantidad
 * @property string|null $descrip
 * @property string|null $estado
 * @property Carbon|null $fecha
 * 
 * @property Empleado|null $empleado
 * @property CostoPro|null $costo_pro
 * @property Collection|DetalleVentum[] $detalle_venta
 * @property Collection|ProLug[] $pro_lugs
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'id_pro';
	public $timestamps = false;

	protected $casts = [
		'id_emp' => 'int',
		'id_cos_pro' => 'int',
		'cantidad' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_emp',
		'id_cos_pro',
		'cantidad',
		'descrip',
		'estado',
		'fecha'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}

	public function costo_pro()
	{
		return $this->belongsTo(CostoPro::class, 'id_cos_pro');
	}

	public function detalle_venta()
	{
		return $this->hasMany(DetalleVentum::class, 'id_pro');
	}

	public function pro_lugs()
	{
		return $this->hasMany(ProLug::class, 'id_pro');
	}
}
