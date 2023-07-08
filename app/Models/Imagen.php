<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
/**
 * Class Imagen
 * 
 * @property int $id_ima
 * @property int $id_per
 * @property string|null $name
 * @property string|null $imagenn
 * @property Carbon|null $fecha
 * 
 * @property Collection|Imagen[] $imagens
 *
 * @package App\Models
 */
class Imagen extends Model
{
    
	protected $table = 'imagen';
	protected $primaryKey = 'id_ima';
	public $timestamps = false;

	protected $casts = [
		'id_per' => 'int'
	];

	protected $fillable = [
		'id_ima',
		'id_per',
		'name',
        'imagenn',
		'fecha'
		
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_per');
	}
	

}
