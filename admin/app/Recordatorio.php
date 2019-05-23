<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    protected $fillable = [
		'id',
		'idPaciente',
		'hora'
	];

	protected $table = 'recordatorio';
}
