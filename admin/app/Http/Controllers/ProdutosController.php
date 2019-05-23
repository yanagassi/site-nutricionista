<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Redirect;
use DB;

class ProdutosController extends Controller
{
    public function index(){
		$produtos = DB::select('select * from produto join categoria on produto.categoria_id = categoria.id');

		return view('produtos.lista', ['produtos' => $produtos]);
	}

	public function novo(){
		$arrayCategorias = DB::select('select * from categoria');

		return view('produtos.cadastro', ['arrayCategorias' => $arrayCategorias]);
	}

	protected function salvar(Request $request)
    {
    	\Session::flash('msg_sucesso','Cadastro realizado com sucesso!');

        $salvarUser = Produto::create([
            'nome' => $request['nome'],
            'descricao' => $request['descricao'],
            'preco' => $request['preco'],
            'categoria_id' => $request['categoria_id'],
        ]);

        return Redirect::to('produtos/cadastro');
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
		$produtos = Produto::find($id);
		$categorias = Categoria::get();
		$categoria = Categoria::find($produtos->categoria_id);

		// FIZ ESSE ARRAY, POIS NÃO VI UM JEITO DE PASSAR MAIS DE 3 PARAMETROS PELA VIEW....
		$arrayCategorias = array(
							'categorias' => $categorias, 
							'categoria' => $categoria);

		// print_r($categoria); 
		// die;

		return view('produtos.cadastro', ['produtos' => $produtos], ['arrayCategorias' => $arrayCategorias]);
	}

	public function atualizando($id, Request $request){
		$produtos = Produto::find($id);
		$produtos->update($request->all());

		\Session::flash('msg_sucesso','Cadastro alterado com sucesso!');

	 	return Redirect::to('produtos/cadastro/'.$produtos->id.'/editar');
	}
}
