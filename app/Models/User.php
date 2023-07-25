<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//para relacionar los roles y permisos
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

	use HasRoles;

	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'id_emp' => 'int',
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'id_emp',
		'name',
		'username',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];
	public function setPasswordAttribute($valu)
	{
		$this->attributes['password'] = bcrypt($valu);
	}
	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_emp');
	}
}
