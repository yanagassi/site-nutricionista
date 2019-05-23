<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
	if (Auth::guest()){
    	return view('auth/login');
	}else{
		return view('home');
	}
});


Route::get('home', 'HomeController@index')->name('home');

// PRODUTOS
// Route::get('produtos/cadastro', 'ProdutosController@novo')->middleware(['ver.permissao']);
// Route::post('produtos/salvar', 'ProdutosController@salvar')->middleware(['ver.permissao']);
// Route::get('produtos/lista', 'ProdutosController@index')->middleware(['ver.permissao']);
// Route::get('produtos/cadastro/{usuario}/editar', 'ProdutosController@editar')->middleware(['ver.permissao']);
// Route::patch('produtos/{usuario}', 'ProdutosController@atualizando')->middleware(['ver.permissao']);

// PLANO ALIMENTAR
Route::post('plano/salvar', 'HomeController@novoPlano')->middleware(['ver.permissao']);

// DIAGNOSTICO
Route::post('diagnostico/salvar', 'HomeController@novoDiagnostico')->middleware(['ver.permissao']);

//LISTA DE SUBSTITUIÇÃO
Route::post('listasub/salvar', 'HomeController@novaListaSub')->middleware(['ver.permissao']);

//LISTA DE SUBSTITUIÇÃO
Route::post('treinamento/salvar', 'HomeController@novoTrain')->middleware(['ver.permissao']);

// PACIENTES
Route::get('pacientes/cadastro', 'PacientesController@novo')->middleware(['ver.permissao']);
Route::post('pacientes/salvar', 'PacientesController@salvar')->middleware(['ver.permissao']);
Route::get('pacientes/lista', 'PacientesController@index')->middleware(['ver.permissao']);
Route::get('pacientes/cadastro/{usuario}/editar', 'PacientesController@editar')->middleware(['ver.permissao']);
Route::patch('pacientes/{usuario}', 'PacientesController@atualizando')->middleware(['ver.permissao']);
Route::delete('pacientes/{usuario}', 'PacientesController@deletar')->middleware(['ver.permissao']);
Route::get('pacientes/dadospaciente', 'PacientesController@dadospaciente')->middleware(['ver.permissao']);

// CONSULTA
Route::get('consulta/agendar', 'ConsultaController@novo')->middleware(['ver.permissao']);
Route::get('consulta/evolucao', 'ConsultaController@evolucao')->middleware(['ver.permissao']);
Route::get('consulta/meuPerfil', 'ConsultaController@meuPerfil')->middleware(['ver.duasPermissao']);
Route::get('consulta/lista', 'ConsultaController@index')->middleware(['ver.permissao']);
Route::post('consulta/salvar', 'ConsultaController@salvar')->middleware(['ver.permissao']);
Route::patch('consulta/{usuario}', 'ConsultaController@atender')->middleware(['ver.permissao']);
Route::get('consulta/newConsulta', 'ConsultaController@saveDados')->middleware(['ver.permissao']);
Route::get('consulta/acompanhamento', 'ConsultaController@acompanhamento')->middleware(['ver.duasPermissao']);


// RECORDATORIO
Route::get('recordatorio/lista', 'RecordatorioController@index')->middleware(['ver.permissao']);
Route::get('recordatorio/ver', 'RecordatorioController@listagem')->middleware(['ver.duasPermissao']);
Route::get('recordatorio/cadastro', 'RecordatorioController@novo')->middleware(['ver.permissaoPaciente']);
Route::post('recordatorio/salvar', 'RecordatorioController@salvar')->middleware(['ver.permissaoPaciente']);

// Meu Perfil
Route::post('meuPerfil', 'UsuariosController@meuPerfil')->middleware(['ver.permissaoPaciente']);

// BLOG E LINK DO BLOG
Route::get('blog/cadastroLink', 'BlogController@novoLink')->middleware(['ver.permissao']);
Route::get('blog/cadastroBlog', 'BlogController@novoBlog')->middleware(['ver.permissao']);
Route::get('blog/listaBlog', 'BlogController@index')->middleware(['ver.permissao']);
Route::get('blog/cadastroBlog/{usuario}/editar', 'BlogController@editar')->middleware(['ver.permissao']);
Route::patch('blog/cadastroBlog/{usuario}', 'BlogController@atualizando')->middleware(['ver.permissao']);
Route::delete('blog/{usuario}', 'BlogController@deletar')->middleware(['ver.permissao']);
Route::get('blog/artigo/{link}', 'BlogController@artigo')->middleware(['ver.permissao']);



Route::post('blog/salvarLink', 'BlogController@salvarLink')->middleware(['ver.permissao']);
Route::post('blog/salvarBlog', 'BlogController@salvarBlog')->middleware(['ver.permissao']);
Route::delete('linkBlog/{usuario}', 'BlogController@deletarLink')->middleware(['ver.permissao']);
Route::get('blog/listaLink', 'BlogController@indexLink')->middleware(['ver.permissao']);

//VISUALIZAR
Route::get('visualizacao/diagnostico/', 'VisualizarController@diagnostico')->middleware(['ver.duasPermissao']);
Route::get('visualizacao/plano/', 'VisualizarController@plano')->middleware(['ver.duasPermissao']);
Route::get('visualizacao/lista-substituicao/', 'VisualizarController@listasubtituicao')->middleware(['ver.duasPermissao']);
Route::get('visualizacao/treinamentos/', 'VisualizarController@treinamentos')->middleware(['ver.duasPermissao']);


// ALTERAR SENHA
Route::get('alterarSenha/', 'SenhaController@novo')->middleware(['ver.duasPermissao']);
Route::patch('alterarSenha/{usuario}', 'SenhaController@alterar')->middleware(['ver.duasPermissao']);
