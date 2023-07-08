<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactos extends Model
{
    
    protected $table = 'contactos';
	protected $primaryKey = 'id_con';
	public $timestamps = false;

	protected $casts = [
		'id_con' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'email',
        'mesaje',
        'fecha'
	];

}
