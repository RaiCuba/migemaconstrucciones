<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 * 
 * @property int $id_ven
 * @property int|null $id_usu
 * @property int|null $nro
 * @property string|null $estado
 * @property Carbon|null $fecha
 * 
 * @property Usuario|null $usuario
 * @property Collection|DetalleVentum[] $detalle_venta
 *
 * @package App\Models
 */
class Ventum extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'id_ven';
	public $timestamps = false;

	protected $casts = [
		'id_usu' => 'int',
		'nro' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_usu',
		'nro',
		'estado',
		'fecha'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usu');
	}

	public function detalle_venta()
	{
		return $this->hasMany(DetalleVentum::class, 'id_ven');
	}
}
