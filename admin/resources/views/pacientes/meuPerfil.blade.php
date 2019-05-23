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
        <div class="content">
            <div class="container-fluid">
            <div class="portlet">
                <div class="portlet-heading" style="background:#5cadd6;">
                    <h3 class="portlet-title">
                       <b>Perfil</b>
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div id="bg-info" class="panel-collapse collapse show">
                <div class="portlet-body">
                @yield('content')
                <div class="form-group row">
                    <div class="col-8">
                        <label for="example-text-input" class="col-1 col-form-label">Nome:</label>
                    
                        <?/*$pacientes->nome=(isset($pacientes->nome))?$pacientes->nome:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->nome;  ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Genero:</label>

                    <?/*$pacientes->genero=(isset($pacientes->genero))?$pacientes->genero:'Não cadastrado';*/?>
                        <input class="form-control" type="text" value="<? print $pacientes->genero; ?>" id="example-text-input" disabled>
                    </div>

                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Idade:</label>

                    <?/*$pacientes->idade=(isset($pacientes->idade))?$pacientes->idade:'Não cadastrado';*/?>
                        <input class="form-control" type="text" value="<? print $pacientes->idade; ?>" id="example-text-input" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-1">
                    <label for="example-text-input" class="col-1 col-form-label">Altura:</label>

                    <?/*$pacientes->altura=(isset($pacientes->altura))?$pacientes->altura:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->altura; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                        <label for="example-text-input" class="col-0 col-form-label">IMC:</label>

                        <?/*$pacientes->imc=(isset($pacientes->imc))?$pacientes->imc:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->imc; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Biceps:</label>

                        <?/*$pacientes->biceps=(isset($pacientes->biceps))?$pacientes->biceps:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->biceps; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Triceps:</label>

                    <?/*$pacientes->triceps=(isset($pacientes->triceps))?$pacientes->triceps:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->triceps; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">SupraIliaca:</label>

                    <?/*$pacientes->supraIliaca=(isset($pacientes->supraIliaca))?$pacientes->supraIliaca:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->supraIliaca; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Coxa:</label>
                    <?/*$pacientes->coxa=(isset($pacientes->coxa))?$pacientes->coxa:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->coxa; ?>" id="example-text-input" disabled>
                    </div>
                    <div class="col-1">
                    <label for="example-text-input" class="col-0 col-form-label">Panturrilha:</label>
                    <?/*$pacientes->panturrilha=(isset($pacientes->panturrilha))?$pacientes->panturrilha:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->panturrilha; ?>" id="example-text-input" disabled>
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-3">
                        <label for="example-text-input" class="col-0 col-form-label">Peso Ideal:</label>
                    <?/*$pacientes->pesoIdeal=(isset($pacientes->pesoIdeal))?$pacientes->pesoIdeal:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->pesoIdeal; ?>" id="example-text-input" disabled>
                    </div>

                    <div class="col-9">
                        <label for="example-text-input" class="col-0 col-form-label">Motivo:</label>
                    <?/*$pacientes->motivo=(isset($pacientes->motivo))?$pacientes->motivo:'Não cadastrado';*/?>  
                        <input class="form-control" type="text" value="<? print $pacientes->motivo; ?>" id="example-text-input" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="example-text-input" class="col-1 col-form-label">Objetivo:</label>

                        <?/*$pacientes->objetivo=(isset($pacientes->objetivo))?$pacientes->objetivo:'Não cadastrado';*/?>  
                        <textarea class="form-control" type="text" value="<? print $pacientes->objetivo; ?>" id="example-text-input"  disabled cols="30" rows="5"><? print $pacientes->objetivo; ?></textarea>

                    </div>
                </div>

                
            </div>
        </div>
    </div>
    @endsection
