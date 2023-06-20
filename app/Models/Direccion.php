<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 * 
 * @property int $id_dir
 * @property int|null $id_ciu
 * @property int|null $id_per
 * @property string|null $pueblo
 * @property string|null $direc
 * @property string|null $zona
 * 
 * @property Ciudad|null $ciudad
 * @property Persona|null $persona
 *
 * @package App\Models
 */
class Direccion extends Model
{
	protected $table = 'direccion';
	protected $primaryKey = 'id_dir';
	public $timestamps = false;

	protected $casts = [
		'id_ciu' => 'int',
		'id_per' => 'int'
	];

	protected $fillable = [
		'id_ciu',
		'id_per',
		'pueblo',
		'direc',
		'zona'
	];

	public function ciudad()
	{
		return $this->belongsTo(Ciudad::class, 'id_ciu');
	}

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_per');
	}
}
