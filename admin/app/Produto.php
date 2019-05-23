<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
		'id',
		'nome',
		'descricao',
		'preco',
		'categoria_id'
	];

	protected $table = 'produto';
}
