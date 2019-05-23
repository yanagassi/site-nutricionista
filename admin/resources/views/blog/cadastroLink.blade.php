@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Links para blog</h4>
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
                <div class="portlet-heading" style="background:#5cadd6;"	>
                    <h3 class="portlet-title">
                        Inserir Links para blog
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
							{{ Form::model($pacientes, ['method' => 'PATCH', 'url' => 'pacientes/'.$pacientes[0]->id]) }}
						@else
							{{ Form::open(['url' => 'blog/salvarLink', 'method' => 'post']) }}
						@endif
							<div class="row links">
								<div class="col-md-6">
									{{ Form::label('nome', 'Nome') }}
									{{ Form::input('text', 'nome[]', isset($pacientes)? $pacientes[0]->alimento : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-md-6">
									{{ Form::label('segmento', 'Segmento') }}
									{{ Form::input('text', 'segmento[]',isset($pacientes)? $pacientes[0]->alimento : '', ['class' => 'form-control', 'required']) }}
								</div>
							</div>
							<div class="row" id="maisLinks"></div>
							<div class="row">
								<div class="col-md-12">
									<button type="button"  style="background:#5cadd6; border-color:5cadd6;"class="btn btn-info mt-5" onclick="addLink()">
										<i class="mdi mdi-clipboard-plus"></i> Links
									</button>
								</div>
							</div>
							
							<div class="col-12 p-4 text-right">
								{{ Form::submit('Salvar', ['class' => 'btn btn-primary' , 'style' => 'background:#5cadd6;']) }}
							</div>
						{{ Form::close() }}
					 </div>
				</div>
		    </div>
    	</div>
   	</div>
   	<script>
   		function addLink(){
   			$("#maisLinks").append($(".links").html());
   		}
   	</script>
@endsection

