@extends('layouts.app')

@section('content')
<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">matérias</h4>
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
                <div class="portlet-heading" style="background:#5cadd6">
                    <h3 class="portlet-title">
                        Consulta matérias
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
                    	<div class="table-responsive">
                    		<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="text-white" style="background:#5cadd6">
								        <th>Título</th>
								        <th>Excluir</th>
								        <th>Editar</th>
								    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($blog as $materia)
                                    <tr >
								        <td>{{ $materia->titulo }}</td>
								        <td>
								        	{{ Form::open(['url' => 'blog/'.$materia->id, 'method' => 'delete']) }}
								        		<button type="submit" class="btn btn-danger">Excluir</button>
								        	{{ Form::close() }}
								        </td>
								        <td>
								        	<a href="cadastroBlog/{{$materia->id}}/editar" class="btn btn-warning">
								        		Editar
								        	</a>
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
