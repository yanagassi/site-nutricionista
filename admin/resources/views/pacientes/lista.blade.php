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
                        Consulta paciente
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
				<style>th{ vertical-align: middle;text-align: center;}</style>
                <div id="bg-info" style="background:#5cadd6;" class="panel-collapse collapse show">
                    <div class="portlet-body">
                    	<div class="table-responsive">
                    		<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="bg-primary text-white">
								        <th>Nome do Paciente</th>
								        <th>E-mail do Paciente</th>
								        <th>Excluir Paciente</th>
								        <th>Editar Paciente</th>
										<th>Evolução do Paciente</th>
										<th>Dados do Paciente</th>
								    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                    <tr >
								        <td>{{ $paciente->nome }}</td>
								        <td>{{ $paciente->email }}</td>
								        <td>
										<center>
								        	{{ Form::open(['url' => 'pacientes/'.$paciente->id, 'method' => 'delete']) }}
								        		<button type="submit" class="btn btn-danger">Excluir</button>
								        	{{ Form::close() }}
											</center>
								        </td>
								        <td> 
											<center>
								        	<a href="cadastro/{{$paciente->id}}/editar" class="btn btn-warning">
								        		Editar
								        	</a>
											</center>
								        </td>
										<td>
											<center>
												<a href="../consulta/acompanhamento?id={{$paciente->id}}" class="btn btn-success">
													Evolução
												</a>
											</center>
								        </td>
										<td>
										<center>
											<a href="../pacientes/dadospaciente?id={{$paciente->id}}" class="btn btn-success">
								        		Dados
								        	</a>
											</center>
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
