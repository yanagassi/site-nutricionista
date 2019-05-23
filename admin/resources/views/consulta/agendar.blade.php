@extends('layouts.app')

@section('content')
<script language="JavaScript">
/*-----------------------------------------------------------------------
Máscara para o campo data dd/mm/aaaa hh:mm:ss
Exemplo: <input maxlength="16" name="datahora" onKeyPress="DataHora(event, this)">
-----------------------------------------------------------------------*/
function DataHora(evento, objeto){
	var keypress=(window.event)?event.keyCode:evento.which;
	campo = eval (objeto);
	if (campo.value == '00/00/0000 00:00:00')
	{
		campo.value=""
	}
 
	caracteres = '0123456789';
	separacao1 = '/';
	separacao2 = ' ';
	separacao3 = ':';
	conjunto1 = 2;
	conjunto2 = 5;
	conjunto3 = 10;
	conjunto4 = 13;
	conjunto5 = 16;
	if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19))
	{
		if (campo.value.length == conjunto1 )
		campo.value = campo.value + separacao1;
		else if (campo.value.length == conjunto2)
		campo.value = campo.value + separacao1;
		else if (campo.value.length == conjunto3)
		campo.value = campo.value + separacao2;
		else if (campo.value.length == conjunto4)
		campo.value = campo.value + separacao3;
		else if (campo.value.length == conjunto5)
		campo.value = campo.value + separacao3;
	}
	else
		event.returnValue = false;
}
</script>
	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Agendar consulta</h4>
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
                        Agendamento de consulta
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
							{{ Form::model($pacientes, ['method' => 'PATCH', 'url' => 'consulta/'.$pacientes[0]->id]) }}
						@else
							{{ Form::open(['url' => 'consulta/salvar', 'method' => 'post']) }}
						@endif
							<div class="row">
								<div class="col-md-6">
									{{ Form::label('idPaciente', 'Paciente') }}
									<select name="idPaciente" id="idPaciente" class="form-control">
								    	<option value=""> Selecione o paciente</option>
									    @foreach ($pacientes as $paciente)
										    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
									    @endforeach
									</select>
								</div>	
								<div class="col-md-6">
									{{ Form::label('data', 'Data e hora') }}
									{{ Form::input('text', 'data', null, ['class' => 'form-control', 'onKeyPress' => 'DataHora(event, this)','required']) }}
								</div>
							</div>
							<div class="row col-sm-12" style="margin-top:20px;">
								{{ Form::label('observacoes', 'Observações') }}
								{{ Form::textarea('observacoes', null, ['class' => 'form-control']) }}
							</div>
							
							<div class="col-12 p-4 text-right">
								{{ Form::submit('Salvar', ['class' => 'btn btn-primary', 'style'=> 'padding:15px;']) }}
							</div>
						{{ Form::close() }}
					 </div>
				</div>
		    </div>
    	</div>
   	</div>
@endsection

