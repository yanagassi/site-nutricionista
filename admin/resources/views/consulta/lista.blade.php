@extends('layouts.app')

@section('content')
<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Consulta</h4>
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
                        Consultas agendadas
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
					  	<div class="alert alert-warning">
					  		{{ Session::get('msg_erro') }}
					  	</div>
					  	@endif
                    	<div class="table-responsive">
                    		<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr style="background:#5cadd6;" class="text-white">
								        <th>Paciente</th>
								        <th>Data / hora</th>
								        <th>Atendimentos</th>
								    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultas as $consulta)
                                    <tr >
								        <td>{{ $consulta->nome }}</td>
								        <td>{{ $consulta->data }}</td>
								        <td>
								        	@if($consulta->status == 'S')
										  	<button type="button" class="btn btn-secondary" disabled>Paciente atendido</button>
										  	@else
								        	{{ Form::model($consulta, ['method' => 'PATCH', 'files' => true, 'url' => 'consulta/'.$consulta->id]) }}
								        		<button type="submit" class="btn btn-success">Atender</button>
								        	{{ Form::close() }}
										  	@endif
								        </td>
								     </tr>	
                                    @endforeach
                                </tbody>
                            </table>
						</div>
			  		</div>
				</div>
	    	</div>
		</div>
	</div>
@endsection
