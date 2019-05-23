<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
		'id',
		'idLink',
		'titulo',
		'texto',
		'imagem'
	];

	protected $table = 'blog';
}
