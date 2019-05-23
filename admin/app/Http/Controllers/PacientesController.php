<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\Permissao;
use Illuminate\Http\Request;
use Redirect;
use DB;

class PacientesController extends Controller
{
	public function index(){
		// $usuarios = User::get();
		// $permissoes = Permissao::get();
		$pacientes = DB::table('paciente')
		    ->select('users.*','paciente.*')
		    ->join('users', 'users.email', '=', 'paciente.email')
		    ->where('users.idPermissao', 3)
		    ->get();

		return view('pacientes.lista', ['pacientes' => $pacientes]);
	}

	public function novo(){
		$permissoes = Permissao::get();
		return view('pacientes.cadastro',['permissoes' => $permissoes]);
	}

	protected function salvar(Request $request)
    {
    	\Session::flash('msg_sucesso','Cadastro realizado com sucesso!');

        $salvarPaciente = Paciente::create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'idade' => $request['idade'],
            'altura' => $request['altura'],
            'peso' => $request['peso'],
            'imc' => $request['imc'],
            'genero' => $request['genero'],
            'motivo' => $request['motivo'],
            'email' => $request['email'],
            'objetivo' => $request['objetivo'],
            'circ_coxa' => $request['circ_coxa'],
            'circ_cintura' => $request['circ_cintura'],
            'circ_pescoco' => $request['circ_pescoco'],
            'circ_braco' => $request['circ_braco'],
            'circ_panturrilha' => $request['circ_panturrilha'],
            'circ_abdome' => $request['circ_abdome'],
            'biceps' => $request['biceps'],
            'triceps' => $request['triceps'],
            'subEscapular' => $request['subEscapular'],
            'supraIliaca' => $request['supraIliaca'],
            'peitoral' => $request['peitoral'],
            'coxa' => $request['coxa'],
            'panturrilha' => $request['panturrilha'],
        ]);

        $salvarUser = User::create([
            'name' => $request['nome'],
            'email' => $request['email'],
            'idPermissao' => $request['permissao'],
            'password' => bcrypt(123456)
        ]);

        return Redirect::to('pacientes/cadastro');
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
        $pacientes->altura = str_replace(',','.',$request['altura']);
        $pacientes->peso = str_replace(',','.',$request['peso']);
        $pacientes->imc = str_replace(',','.',$request['imc']);
        $pacientes->genero = $request['genero'];
        $pacientes->motivo = $request['motivo'];
        $pacientes->email = $request['email'];
        $pacientes->objetivo = $request['objetivo'];
        $pacientes->circ_coxa = str_replace(',','.',$request['circ_coxa']);
        $pacientes->circ_cintura = str_replace(',','.',$request['circ_cintura']);
        $pacientes->circ_pescoco = str_replace(',','.',$request['circ_pescoco']);
        $pacientes->circ_braco = str_replace(',','.',$request['circ_braco']);
        $pacientes->circ_panturrilha = str_replace(',','.',$request['circ_panturrilha']);
        $pacientes->circ_abdome = str_replace(',','.',$request['circ_abdome']);
        $pacientes->biceps = str_replace(',','.',$request['biceps']);
        $pacientes->triceps = str_replace(',','.',$request['triceps']);
        $pacientes->subEscapular = str_replace(',','.',$request['subEscapular']);
        $pacientes->supraIliaca = str_replace(',','.',$request['supraIliaca']);
        $pacientes->peitoral = str_replace(',','.',$request['peitoral']);
        $pacientes->coxa = str_replace(',','.',$request['coxa']);
        $pacientes->panturrilha = str_replace(',','.',$request['panturrilha']);
        $pacientes->tmb = $request['tmb'];
        $pacientes->getPaciente = $request['getPaciente'];
        $pacientes->pesoIdeal = str_replace(',','.',$request['pesoIdeal']);
        $pacientes->save();

		\Session::flash('msg_sucesso','Cadastro alterado com sucesso!');

	 	return Redirect::to('pacientes/cadastro/'.$pacientes->id.'/editar');
	}


    public function dadospaciente()
    {
        
        $id = $_GET['id'];
        $dados = DB::table('paciente')->get()->where('id', $_GET['id']);
        foreach($dados as $key){
            $paciente=array(
                'nome' => $key->nome,
                'genero' => $key->genero,
                'idade' => $key->idade,
                'altura'=>$key->altura,
                'peso'=>$key->peso,
                'imc' => $key->imc,
                'motivo' => $key->motivo,
                'objetivo' => $key->objetivo,
                'circ_coxa' => $key->circ_coxa,
                'circ_cintura' => $key->circ_cintura,
                'circ_pescoco' => $key->circ_pescoco,
                'circ_braco' => $key->circ_braco,
                'circ_panturrilha' => $key->circ_panturrilha,
                'circ_abdome'=>$key->circ_abdome,
                'biceps' => $key->biceps,
                'triceps'=>$key->triceps,
                'subEscapular' => $key->subEscapular,
                'supraIliaca' => $key->supraIliaca,
                'peitoral' => $key->peitoral,
                'coxa'=>$key->coxa,
                'panturrilha'=>$key->panturrilha,
                'tmb' => $key->tmb,
                'pesoIdeal' =>$key->pesoIdeal,
            ); 
        }
        return view('pacientes.dadospaciente',['paciente' => $paciente]);
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
