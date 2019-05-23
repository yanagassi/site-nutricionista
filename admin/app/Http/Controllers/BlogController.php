<?php

namespace App\Http\Controllers;

use App\User;
use App\LinkBlog;
use App\Blog;

use Illuminate\Http\Request;
use Redirect;
use DB;
use Auth;
use Storage;

class BlogController extends Controller
{
	// LISTANDO BLOG
	public function index(){
		$blog = Blog::get();

		return view('blog.listaBlog', ['blog' => $blog]);
	}

	// LISTANDO LINK
	public function indexLink(){
		$links = LinkBlog::get();

		return view('blog.listaLink', ['links' => $links]);
	}

	public function novoLink(){
		// $permissoes = Permissao::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		return view('blog.cadastroLink');
	}

	public function novoBlog(){
		$LinkBlog = LinkBlog::get();
		// return view('recordatorio.cadastro',['permissoes' => $permissoes]);
		$imageTest='buahlLtXss29XKBgG6uuLPY1GHmAwdPknWcdv9WI.jpeg';
		return view('blog.cadastroBlog',['LinkBlog' => $LinkBlog], ['imageTest' => $imageTest]);
	}

	protected function salvarLink(Request $request)
    {
    	\Session::flash('msg_sucesso','Link para blog inserido com sucesso!');


		for ($i=0; $i < count($request['nome']); $i++) { 
    		// echo $request['alimento'][$i].' - '.$request['qtd'][$i]."<br>";
			DB::table('linkBlog')->insert(
				['nome' => $request['nome'][$i], 
				'created_at' => date("Y-m-d"),
				'updated_at' => date("Y-m-d"),
				'segmento' => $request['segmento'][$i]]
			);
			
    	}

        return Redirect::to('blog/cadastroLink');
    }

    protected function salvarBlog(Request $request)
    {
	
		// $upload = $request->file('imagem')->store('images');
		// Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('/imagesBlog', $nameFile,'public_uploads');


    	\Session::flash('msg_sucesso','Blog inserido com sucesso!');

		$salvarBlog = Blog::create([
            'idLink' => $request['idLink'],
            'titulo' => $request['titulo'],
            'texto' => $request['texto'],
            'imagem' => $nameFile
        ]);

        return Redirect::to('blog/cadastroBlog');
    }

	

	public function editar($id){
		// $pacientes = DB::select('select * from paciente join users on paciente.email = users.email where users.id = "'.$id.'" and users.idPermissao = 3');
		$blog = Blog::find($id);
		$LinkBlog = LinkBlog::get();
		// FIZ ESSE ARRAY, POIS NÃO VI UM JEITO DE PASSAR MAIS DE 3 PARAMETROS PELA VIEW....
		// $arrayPermissoes = array(
		// 					'permissaoUsuario' => $permissaoUsuario, 
		// 					'permissoes' => $permissoes);

		// print_r($pacientes->id);
		// die;

		return view('blog.cadastroBlog', ['blog' => $blog], ['LinkBlog' => $LinkBlog]);
	}

	public function atualizando($id, Request $request){
		// $upload = $request->file('imagem')->store('images');
		// Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->file('imagem')->getClientOriginalExtension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->file('imagem')->storeAs('images', $nameFile);

		$blog = Blog::find($id);
		$blog->titulo = $request['titulo'];
        $blog->idLink = $request['idLink'];
        $blog->imagem = $nameFile;
        $blog->texto = $request['texto'];
        $blog->save();

		\Session::flash('msg_sucesso','Cadastro alterado com sucesso!');

	 	return Redirect::to('blog/cadastroBlog/'.$blog->id.'/editar');
	}

	// DELETANDO BLOG
	public function deletar($id){
		$blog = Blog::find($id);
		// $pacientes = User::find($id);
		// $permissoes = Permissao::get();
		$blog->delete();
		\Session::flash('msg_sucesso','Matéria deletada com sucesso!');

		return Redirect::to('blog/listaBlog');
	}

	// DELETANDO LINK
	public function deletarLink($id){
		if (DB::table('blog')->where('idLink', $id)->count() == 0) {
			$linkBlog = LinkBlog::find($id);
			$linkBlog->delete();
			\Session::flash('msg_sucesso','Link deletado com sucesso!');
		}else{
			\Session::flash('msg_erro','Esse link possui cadastro em alguma matéria do blog, não pode ser deletado....');
		}

		return Redirect::to('blog/listaLink');
	}

	public function artigo($link){
		$artigo["artigos"] = DB::table('linkBlog')
            ->select('*')
            ->join('blog', 'blog.idLink', '=', 'linkBlog.id')
            ->where('linkBlog.nome', $link)
			->limit(1)
			->get();
			
		return view('blog.artigo',['artigo' => $artigo]);

	}
}
