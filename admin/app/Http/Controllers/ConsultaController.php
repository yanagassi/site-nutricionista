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

class ConsultaController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){
		// $usuarios = User::get();
		// $permissoes = Permissao::get();
		$consultas = DB::table('consulta')
			->select('consulta.*','paciente.nome')
		    ->join('paciente', 'paciente.id', '=', 'consulta.idPaciente')
		    ->get();

		return view('consulta.lista', ['consultas' => $consultas]);
	}

	public function novo(){
		$pacientes = DB::table('paciente')
		    ->select('users.*','paciente.*')
		    ->join('users', 'users.email', '=', 'paciente.email')
		    ->where('users.idPermissao', 3)
		    ->get();

		return view('consulta.agendar',['pacientes' => $pacientes]);
	}

	protected function salvar(Request $request)
    {
    	\Session::flash('msg_sucesso','Consulta agendada com sucesso!');

        $salvarConsulta = Consulta::create([
            'idPaciente' => $request['idPaciente'],
            'data' => $request['data'],
            'observacoes' => $request['observacoes']
        ]);


        return Redirect::to('consulta/agendar');
    }

	

	public function editar($id){
		// $pacientes = DB::select('select * from paciente join users on paciente.email = users.email where users.id = "'.$id.'" and users.idPermissao = 3');
		$pacientes = DB::table('paciente')
		    ->select('users.*','paciente.*')
		    ->join('users', 'users.email', '=', 'paciente.email')
		    ->where('paciente.id', $id)
		    ->get();
		$permissoes = Permissao::get();

		// FIZ ESSE ARRAY, POIS NÃO VI UM JEITO DE PASSAR MAIS DE 3 PARAMETROS PELA VIEW....
		// $arrayPermissoes = array(
		// 					'permissaoUsuario' => $permissaoUsuario, 
		// 					'permissoes' => $permissoes);

		// print_r($pacientes->id);
		// die;

		return view('pacientes.cadastro', ['pacientes' => $pacientes], ['permissoes' => $permissoes]);
	}

	public function atualizando($id, Request $request){
		$pacientes = Paciente::find($id);
		$pacientes->nome = $request['nome'];
        $pacientes->email = $request['email'];
        $pacientes->idade = $request['idade'];
        $pacientes->altura = $request['altura'];
        $pacientes->peso = $request['peso'];
        $pacientes->imc = $request['imc'];
        $pacientes->genero = $request['genero'];
        $pacientes->motivo = $request['motivo'];
        $pacientes->email = $request['email'];
        $pacientes->objetivo = $request['objetivo'];
        $pacientes->save();

		\Session::flash('msg_sucesso','Cadastro alterado com sucesso!');

	 	return Redirect::to('pacientes/cadastro/'.$pacientes->id.'/editar');
	}

	public function atender($id, Request $request){
		$consulta = Consulta::find($id);
		$consulta->status = "S";
        $consulta->save();

		\Session::flash('msg_sucesso','Paciente atendido');

	 	return Redirect::to('consulta/lista/');
	}


	public function meuPerfil()
	{
		$id = $_GET['id'];
		$user = DB::table('paciente')->where('id', $id)->first();
		return view('pacientes/meuPerfil', ['pacientes' => $user]);
	}
	public function deletar($id){
		$pacientes = Paciente::find($id);
		// $pacientes = User::find($id);
		// $permissoes = Permissao::get();
		$pacientes->delete();
		\Session::flash('msg_sucesso','Paciente deletado com sucesso!');

		return Redirect::to('pacientes/lista');
	}



	public function saveDados()
	{
		
		$arr = array(
			'id_paciente' =>$_GET['id_user'],
			'peso'=>$_GET['peso'],
			'imc'=>$_GET['imc'],
			'gc' => $_GET['gc'],
			'c_braco' => $_GET['c_braco'],
			'c_cintura' => $_GET['c_cintura'],
			'c_abs' => $_GET['c_abs'],
			'd_bic' => $_GET['d_bic'],
			'd_tri' => $_GET['d_tri'],
			'd_supili' => $_GET['d_supili'],
			'd_subesc'=> $_GET['d_subesc'],
		);
		DB::table('evolucao_paciente')->insert($arr);
		return Redirect::to('consulta/evolucao');
	}

	public function evolucao()
	{
		$users = DB::table('paciente')->get();
		return view('pacientes/evolucao', ['pacientes' => $users ]);
	}

	public function acompanhamento()
	{
		$acomp = DB::table('evolucao_paciente')
		->select('evolucao_paciente.*','paciente.nome')
		->where('paciente.email',  Auth::user()->email)
		->join('paciente', 'paciente.id', '=', 'evolucao_paciente.id_paciente')
		->get();
		
		return view('pacientes/acompanhamento',['acomp' => $acomp]);
	}
}
