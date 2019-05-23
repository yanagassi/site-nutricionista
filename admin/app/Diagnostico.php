<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $fillable = [
		'id',
		'idPaciente',
		'imagem',
		'obs'
	];

	protected $table = 'diagnostico';
}
