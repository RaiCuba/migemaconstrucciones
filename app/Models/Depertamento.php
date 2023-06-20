<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Depertamento
 * 
 * @property int $id_dep
 * @property int|null $id_pai
 * @property string|null $nombre
 * 
 * @property Pai|null $pai
 * @property Collection|Ciudad[] $ciudads
 *
 * @package App\Models
 */
class Depertamento extends Model
{
	protected $table = 'depertamento';
	protected $primaryKey = 'id_dep';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'nombre'
	];

	public function pai()
	{
		return $this->belongsTo(Pai::class, 'id_pai');
	}

	public function ciudads()
	{
		return $this->hasMany(Ciudad::class, 'id_dep');
	}
}
