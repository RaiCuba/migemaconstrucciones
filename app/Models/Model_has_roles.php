<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Model_has_roles extends Model
{
	// para el grafico
	//
	protected $table = 'model_has_roles';
	public $timestamps = false;

	protected $casts = [];

	protected $fillable = [
		'role_id',
		'model_type',
		'model_id',
	];

	public function roles()
	{
		return $this->belongsTo(Roles::class, 'role_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'model_id');
	}
}
