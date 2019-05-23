@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Recordatório</h4>
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
                        Inserir Recordatório
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
							{{ Form::open(['url' => 'recordatorio/salvar', 'method' => 'post']) }}
						@endif
							<div class="row">
								<div class="col-md-4">
									{{ Form::label('hora', 'Hora') }}
									{{ Form::input('Time', 'hora', isset($pacientes)? $pacientes[0]->hora : '', ['class' => 'form-control', 'required']) }}
								</div>
							</div>
							<div class="row alimentos">
								<div class="col-md-6">
									{{ Form::label('alimento', 'Alimento') }}
									{{ Form::input('text', 'alimento[]', isset($pacientes)? $pacientes[0]->alimento : '', ['class' => 'form-control', 'required']) }}
								</div>	
								<div class="col-md-2">
									{{ Form::label('qtd', 'Quantidade') }}
									{{ Form::input('Number', 'qtd[]', isset($pacientes)? $pacientes[0]->qtd : '', ['class' => 'form-control', 'required']) }}
								</div>
								<div class="col-md-4">
									<label for="porcao">Tipo da porção</label>
									<select name="porcao[]" class="form-control" required="">
										<option value="">Selecione o tipo de porção</option>
										<option value="kg">Kg</option>
										<option value="g">gramas(g)</option>
										<option value="mg">miligramas(mg)</option>
										<option value="L">L</option>
										<option value="ml">mL</option>
										<option value="ml">Unidade</option>
										<option value="fatia">Fatia(s)</option>
										<option value="Colher de sopa">Colher de sopa</option>
									</select>
								</div>
							</div>
							<div class="row" id="maisAlimentos"></div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-info mt-5" onclick="addAlimento()">
										<i class="mdi mdi-clipboard-plus"></i> Alimentos
									</button>
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
   	<script>
   		function addAlimento(){
   			$("#maisAlimentos").append($(".alimentos").html());
   		}
   	</script>
@endsection

