@extends('layouts.app')

@section('content')

	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Pacientes</h4>
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
                <div class="portlet-heading" style="background:#5cadd6;">
                    <h3 class="portlet-title">
                        Cadastro paciente
                    </h3>
					<style>i{color:white;}</style>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh" style="color:white;"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-info" ><i class="ion-minus-round" ></i></a>
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
							{{ Form::open(['url' => 'pacientes/salvar', 'method' => 'post']) }}
						@endif
							<div class="row" style="margin-top:10px;">
								<div class="col-md-4">
									{{ Form::label('nome', 'Nome') }}
									{{ Form::input('text', 'nome', isset($pacientes)? $pacientes[0]->nome : '', ['class' => 'form-control', 'required']) }}
								</div>
								<div class="col-md-4">
									{{ Form::label('email', 'E-mail') }}
									{{ Form::input('text', 'email', isset($pacientes)? $pacientes[0]->email : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-md-2">
									{{ Form::label('idade', 'Idade') }}
									{{ Form::input('text', 'idade', isset($pacientes)? $pacientes[0]->idade : '', ['class' => 'form-control', 'required']) }}
								</div>
								<div class="col-md-2">
									{{ Form::label('altura', 'Altura') }}
									{{ Form::input('text', 'altura', isset($pacientes) ?$pacientes[0]->altura : '', ['class' => 'form-control', 'required']) }}
								</div>
							</div>
							<div class="row" style="margin-top:25px;">
								<div class="col-sm-3">
									{{ Form::label('peso', 'Peso') }}
									{{ Form::input('text', 'peso', isset($pacientes) ?$pacientes[0]->peso : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-sm-3">
									{{ Form::label('imc', 'IMC') }}
									{{ Form::input('text', 'imc', isset($pacientes) ?$pacientes[0]->imc : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-3">
									{{ Form::label('tmb', 'TMB') }}
									{{ Form::input('text', 'tmb', isset($pacientes) ?$pacientes[0]->tmb : '', ['class' => 'form-control']) }}
								</div><div class="col-sm-3">
									{{ Form::label('getPaciente', 'GET') }}
									{{ Form::input('text', 'getPaciente', isset($pacientes) ?$pacientes[0]->getPaciente : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-4"  style="margin-top:25px;">
									{{ Form::label('pesoIdeal', 'Peso ideal') }}
									{{ Form::input('text', 'pesoIdeal', isset($pacientes) ?$pacientes[0]->pesoIdeal : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-4" style="margin-top:25px;" >
									{{ Form::label('genero', 'Gênero') }}
									<select name="genero" id="genero" class="form-control">
										@if(Request::is('*/editar'))
								    	<option value="{{$pacientes[0]->genero}}"> {{ $pacientes[0]->genero }}</option>
										@else
								    	<option value=""> Selecione o gênero</option>
										@endif
									    <option value="M">Masculino</option>
									    <option value="F">Feminino</option>
									</select>
								</div>
								<div class="col-sm-4"  style="margin-top:25px;">
									{{ Form::label('permissao', 'Permissão') }}
									<select name="permissao" id="permissao" class="form-control">
										@if(Request::is('*/editar'))
								    	<option value="3"> Paciente</option>
								    	@else
								    	<option value="3"> Paciente</option>
								    	@endif
									    @foreach ($permissoes as $permissao)
										    <option value="{{ $permissao->id }}">{{ $permissao->nomePermissao }}</option>
									    @endforeach
									</select>
								</div>
							</div>
							<div class="row col-sm-12"  style="margin-top:25px;">
								{{ Form::label('motivo', 'Motivo') }}
								{{ Form::textarea('motivo', isset($pacientes) ? $pacientes[0]->motivo : '', ['class' => 'form-control', 'required']) }}
							</div>
							<div class="row col-sm-12"  style="margin-top:25px;">
								{{ Form::label('objetivo', 'Objetivo') }}
								{{ Form::textarea('objetivo', isset($pacientes) ? $pacientes[0]->objetivo : '', ['class' => 'form-control', 'required']) }}
							</div>

							<div class="card border-info mb-3 mt-3">
							  <div class="card-header">Circunferências</div>
							  <div class="card-body row">
							    <div class="col-sm-6">
									{{ Form::label('circ_coxa', 'Coxa') }}
									{{ Form::input('text', 'circ_coxa', isset($pacientes) ?$pacientes[0]->circ_coxa : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-sm-6">
									{{ Form::label('circ_cintura', 'Cintura') }}
									{{ Form::input('text', 'circ_cintura', isset($pacientes) ?$pacientes[0]->circ_cintura : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('circ_pescoco', 'Pescoço') }}
									{{ Form::input('text', 'circ_pescoco', isset($pacientes) ?$pacientes[0]->circ_pescoco : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('circ_braco', 'Braço') }}
									{{ Form::input('text', 'circ_braco', isset($pacientes) ?$pacientes[0]->circ_braco : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('circ_panturrilha', 'Panturrilha') }}
									{{ Form::input('text', 'circ_panturrilha', isset($pacientes) ?$pacientes[0]->circ_panturrilha : '', ['class' => 'form-control']) }}
								</div>	
								<div class="col-sm-6">
									{{ Form::label('circ_abdome', 'Abdome') }}
									{{ Form::input('text', 'circ_abdome', isset($pacientes) ?$pacientes[0]->circ_abdome : '', ['class' => 'form-control']) }}
								</div>
							  </div>
							</div>

							<div class="card border-info mb-3 mt-3">
							  <div class="card-header">Dobras Cutâneas</div>
							  <div class="card-body row">
							    <div class="col-sm-6">
									{{ Form::label('biceps', 'Bíceps') }}
									{{ Form::input('text', 'biceps', isset($pacientes) ?$pacientes[0]->biceps : '', ['class' => 'form-control']) }}
								</div>	
								<div class="col-sm-6">
									{{ Form::label('triceps', 'Tríceps') }}
									{{ Form::input('text', 'triceps', isset($pacientes) ?$pacientes[0]->triceps : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('subEscapular', 'Sub-Escapular') }}
									{{ Form::input('text', 'subEscapular', isset($pacientes) ?$pacientes[0]->subEscapular : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('supraIliaca', 'Supra-Ilíaca') }}
									{{ Form::input('text', 'supraIliaca', isset($pacientes) ?$pacientes[0]->supraIliaca : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('peitoral', 'Peitoral') }}
									{{ Form::input('text', 'peitoral', isset($pacientes) ?$pacientes[0]->peitoral : '', ['class' => 'form-control']) }}
								</div>	
								<div class="col-sm-6">
									{{ Form::label('coxa', 'Coxa') }}
									{{ Form::input('text', 'coxa', isset($pacientes) ?$pacientes[0]->coxa : '', ['class' => 'form-control']) }}
								</div>
								<div class="col-sm-6">
									{{ Form::label('panturrilha', 'Panturrilha') }}
									{{ Form::input('text', 'panturrilha', isset($pacientes) ?$pacientes[0]->panturrilha : '', ['class' => 'form-control']) }}
								</div>
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

