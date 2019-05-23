<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use DB;
use Auth;
use App\PlanoAlimentar;
use App\Diagnostico;
use App\ListaSubstituicao;
use App\Treinamentos;
use Redirect;

class HomeController extends Controller
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
    public function index()
    {
        $contaPacientes = DB::table('paciente')->count();

        $pacientes = DB::table('paciente')
            ->select('users.*','paciente.*')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.idPermissao', 3)
            ->get();


        $consulta = DB::table('paciente')
            ->select('users.*','paciente.*','consulta.*')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->join('consulta', 'consulta.idPaciente', '=', 'paciente.id')
            ->where('users.id', Auth::user()->id)
            ->where('consulta.status','A')
            ->orderby('consulta.created_at','DESC')
            ->get();

        $consultaDiagnostico = DB::table('diagnostico')
            ->select('diagnostico.imagem')
            ->join('paciente', 'paciente.id', '=', 'diagnostico.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('diagnostico.created_at','DESC')
            ->get();

        $consultaplanoAlimentar = DB::table('planoAlimentar')
            ->select('planoAlimentar.imagem')
            ->join('paciente', 'paciente.id', '=', 'planoAlimentar.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('planoAlimentar.created_at','DESC')
            ->get();
        
        $listaSubstituicao = DB::table('lista_substituicao')
            ->select('lista_substituicao.imagem')
            ->join('paciente', 'paciente.id', '=', 'lista_substituicao.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('lista_substituicao.created_at','DESC')
            ->get();

        $treinamentosTotais = DB::table('treinamentos')
            ->select('treinamentos.imagem')
            ->join('paciente', 'paciente.id', '=', 'treinamentos.idPaciente')
            ->join('users', 'users.email', '=', 'paciente.email')
            ->where('users.id', Auth::user()->id)
            ->orderby('treinamentos.created_at','DESC')
            ->get();
       
        // FIZ ESSE ARRAY, POIS NÃO VI UM JEITO DE PASSAR MAIS DE 3 PARAMETROS PELA VIEW....
        $arrayPacientes = array(
            'pacientes' => $pacientes, 
            'contaPacientes' => $contaPacientes,
            'diagnostico' => $consultaDiagnostico,
            'planoAlimentar' => $consultaplanoAlimentar,
            'listaSubstituicao' => $listaSubstituicao,
            'treinamentos'=>$treinamentosTotais
        );

  

        // print_r($arrayPacientes['diagnostico'][0]->imagem);
        // die;

  
        return view('home', ['arrayPacientes' => $arrayPacientes], ['consulta' => $consulta] );
    }

    protected function novoPlano(Request $request)
    {
    
        // $upload = $request->file('imagem')->store('images');
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('/', $nameFile,'public_uploads');


        \Session::flash('msg_sucesso','Plano inserido com sucesso!');

        $salvarBlog = PlanoAlimentar::create([
            'idPaciente' => $request['idPaciente'],
            'obs' => $request['obs'],
            'imagem' => $nameFile
        ]);

        return Redirect::to('home');
    }

    protected function novoDiagnostico(Request $request)
    {
    
        // $upload = $request->file('imagem')->store('images');
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('/', $nameFile,'public_uploads');


        \Session::flash('msg_sucesso','Plano inserido com sucesso!');

        $salvarBlog = Diagnostico::create([
            'idPaciente' => $request['idPaciente'],
            'obs' => $request['obs'],
            'imagem' => $nameFile
        ]);

        return Redirect::to('home');
    }
    protected function novaListaSub(Request $request)
    {
    
        // $upload = $request->file('imagem')->store('images');
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('/', $nameFile,'public_uploads');


        \Session::flash('msg_sucesso','Lista de substituição inserida com sucesso!');

        $salvarBlog = ListaSubstituicao::create([
            'idPaciente' => $request['idPaciente'],
            'obs' => $request['obs'],
            'imagem' => $nameFile
        ]);

        return Redirect::to('home');
    }

    protected function novoTrain(Request $request)
    {
    
        // $upload = $request->file('imagem')->store('images');
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('/', $nameFile,'public_uploads');


        \Session::flash('msg_sucesso','Lista de substituição inserida com sucesso!');

        $salvarBlog = Treinamentos::create([
            'idPaciente' => $request['idPaciente'],
            'obs' => $request['obs'],
            'imagem' => $nameFile
        ]);

        return Redirect::to('home');
    }
}
