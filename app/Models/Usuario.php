<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usu
 * @property int|null $id_tip_usu
 * @property int|null $id_emp
 * @property int|null $id_rol
 * @property string|null $usu
 * @property string|null $pas
 * @property Carbon|null $fecha
 * @property string|null $estado
 * 
 * @property TipoUsu|null $tipo_usu
 * @property Empleado|null $empleado
 * @property Rol|null $rol
 * @property Collection|Compra[] $compras
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'id_usu';
	public $timestamps = false;

	protected $casts = [
		'id_tip_usu' => 'int',
		'id_emp' => 'int',
		'id_rol' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_tip_usu',
		'id_emp',
		'id_rol',
		'usu',
		'pas',
		'fecha',
		'estado'
	];

	public function tipo_usu()
	{
		return $this->belongsTo(TipoUsu::class, 'id_tip_usu');
	}

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'id_rol');
	}

	public function compras()
	{
		return $this->hasMany(Compra::class, 'id_usu');
	}

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'id_usu');
	}
}
