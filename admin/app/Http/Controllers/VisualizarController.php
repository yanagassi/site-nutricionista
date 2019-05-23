<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\Permissao;
use App\PlanoAlimentar;
use App\Diagnostico;

use Illuminate\Http\Request;
use DB;
use Auth;

class VisualizarController extends Controller
{

		
	public function diagnostico(){
		$diagnosticos['diagnosticos'] =	DB::table('diagnostico')
            ->select('diagnostico.*')
            ->join('paciente', 'paciente.id', '=', 'diagnostico.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('diagnostico.created_at','DESC')
			->get();
		//$permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('visualizar.diagnostico',['diagnosticos' => $diagnosticos]);
	}

	public function plano(){
		$planos["planos"] = DB::table('planoAlimentar')
            ->select('planoAlimentar.*')
            ->join('paciente', 'paciente.id', '=', 'planoAlimentar.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('planoAlimentar.created_at','DESC')
            ->get();
		//$permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('visualizar.plano',['plano' => $planos]);
	}

	public function listasubtituicao(){
		$listas["listas"] = DB::table('lista_substituicao')
            ->select('lista_substituicao.*')
            ->join('paciente', 'paciente.id', '=', 'lista_substituicao.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('lista_substituicao.created_at','DESC')
            ->get();
		//$permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('visualizar.listasub',['listas' => $listas]);
	}

	public function treinamentos(){
		$treinamentos["treinamentos"] = DB::table('treinamentos')
            ->select('treinamentos.*')
            ->join('paciente', 'paciente.id', '=', 'treinamentos.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('treinamentos.created_at','DESC')
            ->get();
		//$permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('visualizar.treinamentos',['treinamentos' => $treinamentos]);
	}

}
