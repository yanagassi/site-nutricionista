@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Meu Perfil</h4>
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
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-heading bg-info">
                    <h3 class="portlet-title">
                        Alterar Senha
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

					  	@if(Session::has('msg_erro'))
					  	<div class="alert alert-danger">
					  		{{ Session::get('msg_erro') }}
					  	</div>
					  	@endif
						
							{{ Form::model($senha, ['method' => 'PATCH', 'url' => 'alterarSenha/'.$senha->id]) }}
								<div class="row">
									<div class="col-md-6">
										{{ Form::label('novaSenha', 'Nova senha') }}
										{{ Form::input('password', 'novaSenha', '', ['class' => 'form-control', 'required']) }}
									</div>
									<div class="col-md-6">
										{{ Form::label('repetirSenha', 'Repetir') }}
										{{ Form::input('password', 'repetirSenha', '', ['class' => 'form-control', 'required']) }}
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

