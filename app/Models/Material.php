<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 * 
 * @property int $id_mat
 * @property int|null $id_prov
 * @property int|null $id_com
 * @property int $id_lug_ext
 * @property string|null $nombre
 * @property string|null $lugar
 * @property string|null $estado
 * 
 * @property LugarExt $lugar_ext
 * @property Proveedor|null $proveedor
 * @property Compra|null $compra
 *
 * @package App\Models
 */
class Material extends Model
{
	protected $table = 'material';
	protected $primaryKey = 'id_mat';
	public $timestamps = false;

	protected $casts = [
		'id_prov' => 'int',
		'id_com' => 'int',
		'id_lug_ext' => 'int'
	];

	protected $fillable = [
		'id_prov',
		'id_com',
		'id_lug_ext',
		'nombre',
		'lugar',
		'estado'
	];

	public function lugar_ext()
	{
		return $this->belongsTo(LugarExt::class, 'id_lug_ext');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'id_prov');
	}

	public function compra()
	{
		return $this->belongsTo(Compra::class, 'id_com');
	}
}
