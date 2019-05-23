<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoAlimentar extends Model
{
    protected $fillable = [
		'id',
		'idPaciente',
		'imagem',
		'obs'
	];

	protected $table = 'planoAlimentar';
}
