<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 * 
 * @property int $id_ciu
 * @property int|null $id_dep
 * @property string|null $nombre
 * 
 * @property Depertamento|null $depertamento
 * @property Collection|Direccion[] $direccions
 *
 * @package App\Models
 */
class Ciudad extends Model
{
	protected $table = 'ciudad';
	protected $primaryKey = 'id_ciu';
	public $timestamps = false;

	protected $casts = [
		'id_dep' => 'int'
	];

	protected $fillable = [
		'id_dep',
		'nombre'
	];

	public function depertamento()
	{
		return $this->belongsTo(Depertamento::class, 'id_dep');
	}

	public function direccions()
	{
		return $this->hasMany(Direccion::class, 'id_ciu');
	}
}
