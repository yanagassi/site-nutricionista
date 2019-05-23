<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
		'id',
		'nome',
		'genero',
		'idade',
		'altura',
		'peso',
		'imc',
		'motivo',
		'email',
		'objetivo',
		'circ_coxa',
		'circ_cintura',
		'circ_pescoco',
		'circ_braco',
		'circ_panturrilha',
		'circ_abdome',
		'biceps',
		'triceps',
		'subEscapular',
		'supraIliaca',
		'peitoral',
		'coxa',
		'panturrilha',
		'getPaciente',
		'tmb',
		'pesoIdeal'
	];

	protected $table = 'paciente';
}
