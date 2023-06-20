<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoEmp
 * 
 * @property int $id_tip_emp
 * @property string|null $nombre
 * @property string $estado
 * 
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class TipoEmp extends Model
{
	protected $table = 'tipo_emp';
	protected $primaryKey = 'id_tip_emp';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'estado'
	];

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'id_tip_emp');
	}
}
