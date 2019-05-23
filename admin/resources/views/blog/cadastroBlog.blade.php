@extends('layouts.app')

@section('content')

	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Blog</h4>
<!-- 	            <ol class="breadcrumb float-right">
	                <li class="breadcrumb-item"><a href="#">Minton</a></li>
	                <li class="breadcrumb-item"><a href="#">Forms</a></li>
	                <li class="breadcrumb-item active">Form Elements</li>
	            </ol> -->
	            <div class="clearfix"></div>
	        </div>
	    </div>
	</div>
    <div class="row">
        <div class="col-12" >
            <div class="portlet" >
                <div class="portlet-heading " style="background:#5cadd6;" >
                    <h3 class="portlet-title" >
                        Inserir matéria para blog
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-info"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>
                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="bg-info" class="panel-collapse collapse show">
                    <div class="portlet-body">
					  	@if(Session::has('msg_sucesso'))
					  	<div class="alert alert-success">
					  		{{ Session::get('msg_sucesso') }}
					  	</div>
					  	@endif
						
						@if(Request::is('*/editar'))
							{{ Form::model($blog, ['method' => 'PATCH', 'files' => true, 'url' => 'blog/cadastroBlog/'.$blog->id]) }}
						@else
							{{ Form::open(['url' => 'blog/salvarBlog', 'method' => 'post','files' => true]) }}
						@endif
							<div class="row">
								<div class="col-md-6">
									{{ Form::label('titulo', 'Título') }}
									{{ Form::input('text', 'titulo', isset($blog)? $blog->titulo : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-md-6">
									<label for="idLink">Link</label>
									<select name="idLink" id="idLink" class="form-control">
											<option value="">Selecione o link</option>
										@foreach($LinkBlog as $link)
											<option value="{{ $link->id }}">{{ $link->nome }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									{{ Form::label('imagem', 'Imagem') }}
									{{ Form::input('file', 'imagem', isset($blog)? $blog->imagem : '', ['class' => 'form-control', 'required']) }}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									{{ Form::label('texto', 'Texto') }}
									<textarea id="elm1" name="texto">{{ isset($blog)? $blog->texto : '' }}</textarea>
								</div>	
							</div>
							
							<div class="col-12 p-4 text-right">
								{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
							</div>
						{{ Form::close() }}
					 </div>
				</div>
		    </div>
    	</div>
   	</div>

@endsection

