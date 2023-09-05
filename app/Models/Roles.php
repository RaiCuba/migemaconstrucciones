<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Roles extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'name',
		'guard_name',
		'created_at',
		'updated_at'
	];

	public function model_has_roles()
	{
		return $this->hasMany(Model_has_roles::class, 'role_id');
	}
}
