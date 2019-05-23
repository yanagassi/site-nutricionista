<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaSubstituicao extends Model
{
    protected $fillable = [
		'id',
		'idPaciente',
		'imagem',
		'obs'
	];

	protected $table = 'lista_substituicao';
}