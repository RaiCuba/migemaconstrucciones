<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 * 
 * @property int $id_car
 * @property string|null $nombre
 * @property string|null $descrip
 * 
 * @property Collection|EmpCar[] $emp_cars
 *
 * @package App\Models
 */
class Cargo extends Model
{
	protected $table = 'cargo';
	protected $primaryKey = 'id_car';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descrip'
	];

	public function emp_cars()
	{
		return $this->hasMany(EmpCar::class, 'id_car');
	}

	
}
