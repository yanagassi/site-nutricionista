<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $fillable = [
		'id',
		'nomePermissao'
	];

	protected $table = 'permissao';
}
