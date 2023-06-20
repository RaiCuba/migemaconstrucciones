<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pai
 * 
 * @property int $id_pai
 * @property string|null $nombre
 * 
 * @property Collection|Depertamento[] $depertamentos
 *
 * @package App\Models
 */
class Pai extends Model
{
	protected $table = 'pais';
	protected $primaryKey = 'id_pai';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function depertamentos()
	{
		return $this->hasMany(Depertamento::class, 'id_pai');
	}
}
