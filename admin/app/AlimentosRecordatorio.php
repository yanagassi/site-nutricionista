<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimentosRecordatorio extends Model
{
    protected $fillable = [
		'id',
		'idRecordatorio',
		'alimento',
		'porcao',
		'qtd'
	];

	protected $table = 'alimentosRecordatorio';
}
