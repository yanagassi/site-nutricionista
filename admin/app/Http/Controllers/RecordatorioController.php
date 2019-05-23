<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\Permissao;

use App\AlimentosRecordatorio;
use App\Recordatorio;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Auth;

class RecordatorioController extends Controller
{
	public function index(){
		// $usuarios = User::get();
		// $permissoes = Permissao::get();
		$recordatorios = DB::table('recordatorio')
		    ->select('recordatorio.*','paciente.nome','alimentosRecordatorio.*')
		    ->join('paciente', 'paciente.id', '=', 'recordatorio.idPaciente')
		    ->join('alimentosRecordatorio', 'alimentosRecordatorio.idRecordatorio', '=', 'recordatorio.id')
		    ->get();


		return view('recordatorio.lista', ['recordatorios' => $recordatorios]);
	}

	public function listagem(){
		// $usuarios = User::get();
		// $permissoes = Permissao::get();
		$recordatorios = DB::table('recordatorio')
			->select('recordatorio.*','paciente.nome','alimentosRecordatorio.*')
			->where('paciente.email',  Auth::user()->email)
		    ->join('paciente', 'paciente.id', '=', 'recordatorio.idPaciente')
		    ->join('alimentosRecordatorio', 'alimentosRecordatorio.idRecordatorio', '=', 'recordatorio.id')
			->get();

		return view('recordatorio.lista', ['recordatorios' => $recordatorios]);
	}

	public function novo(){
		$permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('recordatorio.cadastro');
	}

	protected function salvar(Request $request)
    {
    	\Session::flash('msg_sucesso','Recordatório inserido com sucesso!');

    	// PEGANDO ID PACIENTE
    	$paciente = DB::table('paciente')
		    ->where('email', Auth::user()->email)
		    ->get();

		// SALVANDO RECORDATORIO
    	$salvarRecordatorio = Recordatorio::create([
            'hora' => $request['hora'],
            'idPaciente' => $paciente[0]->id
        ]);

        // PEGANDO ID RECORDATORIO (NAO GOSTO DE USAR LASTINSERTID)
    	$ultimoIdRecordatorioPaciente = DB::table('recordatorio')
		    ->where('idPaciente', $paciente[0]->id)
		    ->orderBy('created_at', 'DESC')
		    ->limit(1)
		    ->get();

    	for ($i=0; $i < count($request['alimento']); $i++) { 
    		// echo $request['alimento'][$i].' - '.$request['qtd'][$i]."<br>";

    		$salvarAlimentos = AlimentosRecordatorio::create([
	            'idRecordatorio' => $ultimoIdRecordatorioPaciente[0]->id,
	            'alimento' => $request['alimento'][$i],
	            'porcao' => $request['porcao'][$i],
	            'qtd' => $request['qtd'][$i]
	        ]);
    	}


     //    $salvarPaciente = Paciente::create([
     //        'nome' => $request['nome'],
     //        'email' => $request['email'],
     //        'idade' => $request['idade'],
     //        'altura' => $request['altura'],
     //        'peso' => $request['peso'],
     //        'imc' => $request['imc'],
     //        'genero' => $request['genero'],
     //        'motivo' => $request['motivo'],
     //        'email' => $request['email'],
     //        'objetivo' => $request['objetivo']
     //    ]);

     //    $salvarUser = User::create([
     //        'name' => $request['nome'],
     //        'email' => $request['email'],
     //        'idPermissao' => $request['permissao'],
     //        'password' => bcrypt(123456)
     //    ]);

        return Redirect::to('recordatorio/cadastro');
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

	public function deletar($id){
		$pacientes = Paciente::find($id);
		// $pacientes = User::find($id);
		// $permissoes = Permissao::get();
		$pacientes->delete();
		\Session::flash('msg_sucesso','Paciente deletado com sucesso!');

		return Redirect::to('pacientes/lista');
	}
}
