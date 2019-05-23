<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkBlog extends Model
{
    protected $fillable = [
		'id',
		'nome'
	];

	protected $table = 'linkBlog';
}
