<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\Permissao;
use App\Consulta;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Auth;

class SenhaController extends Controller
{

	public function novo(){
		$senha = DB::table('users')
            ->select('users.*')
            //->join('paciente', 'paciente.email', '=', 'users.email')
            ->where('users.id', Auth::user()->id)
            ->get();

            // print_r($senha[0]->id);
            // die;

		return view('alterarSenha',['senha' => $senha]);
	}

	public function alterar($id, Request $request){
		if ($request['novaSenha'] == $request['repetirSenha']) {
			$alterarSenha = User::find($id);
			$alterarSenha->password = bcrypt($request['novaSenha']);
	        $alterarSenha->save();

			\Session::flash('msg_sucesso','Senha alterada');
		}else{
			\Session::flash('msg_erro','Senhas diferentes...');
		}

	 	return Redirect::to('alterarSenha/');
	}

}
