<?php

namespace App\Http\Controllers;

use App\User;
use App\Permissao;
use Illuminate\Http\Request;
use Redirect;
use DB;

class UsuariosController extends Controller
{
	public function index(){
		// $usuarios = User::get();
		// $permissoes = Permissao::get();
		$usuarios = DB::select('select * from users join permissao on users.idPermissao = permissao.id');

		return view('usuarios.lista', ['usuarios' => $usuarios]);
	}

	public function meuPerfil(){
		$usuario = 
			DB::table('users')
            ->select('users.*')
            ->join('paciente', 'paciente.email', '=', 'users.email')
            ->where('users.id', Auth::user()->id)
            ->get();

		return view('perfil', ['usuario' => $usuario]);
	}

	public function novo(){
		$arrayPermissoes = Permissao::get();

		return view('usuarios.cadastro', ['arrayPermissoes' => $arrayPermissoes]);
	}

	protected function salvar(Request $request)
    {
    	\Session::flash('msg_sucesso','Cadastro realizado com sucesso!');

        $salvarUser = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'idPermissao' => $request['idPermissao'],
            'password' => bcrypt($request['password']),
        ]);

        return Redirect::to('usuarios/cadastro');
    }

	public function deletar($id){
		$usuarios = User::find($id);
		// $usuarios = User::find($id);
		// $permissoes = Permissao::get();
		$usuarios->delete();
		\Session::flash('msg_sucesso','Usuario deletado com sucesso!');

		return Redirect::to('usuarios/lista');
	}

	public function editar($id){
		$usuarios = User::find($id);
		$permissoes = Permissao::get();
		$permissaoUsuario = Permissao::find($usuarios->idPermissao);

		// FIZ ESSE ARRAY, POIS NÃO VI UM JEITO DE PASSAR MAIS DE 3 PARAMETROS PELA VIEW....
		$arrayPermissoes = array(
							'permissaoUsuario' => $permissaoUsuario, 
							'permissoes' => $permissoes);

		// print_r($arrayPermissoes['permissaoUsuario']->nomePermissao); 
		// die;

		return view('usuarios.cadastro', ['usuarios' => $usuarios], ['arrayPermissoes' => $arrayPermissoes]);
	}

	public function atualizando($id, Request $request){
		$usuarios = User::find($id);
		$usuarios->update($request->all());

		\Session::flash('msg_sucesso','Cadastro alterado com sucesso!');

	 	return Redirect::to('usuarios/cadastro/'.$usuarios->id.'/editar');
	}
}
