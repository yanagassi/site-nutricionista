<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinamentos extends Model
{
    protected $fillable = [
		'id',
		'idPaciente',
		'imagem',
		'obs'
	];

	protected $table = 'treinamentos';
}
