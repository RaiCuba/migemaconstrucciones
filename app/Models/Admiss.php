<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admiss
 * 
 * @property int $id_adm
 * @property string|null $nombre
 * @property string|null $correo
 * @property string|null $contasena
 * @property string|null $estado
 *
 * @package App\Models
 */
class Admiss extends Model
{
	protected $table = 'admiss';
	protected $primaryKey = 'id_adm';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'correo',
		'contasena',
		'estado'
	];
}
