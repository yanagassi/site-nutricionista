@extends('layouts.app')

@section('content')
<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
	            <h4 class="page-title">Evolução</h4>
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
                <div class="portlet-heading"  style="background:#5cadd6; ">
                    <h3 class="portlet-title">
                        Registro de Evolução
                    </h3>
                    <div class="clearfix"></div>
                </div>
            <div class="portlet-body">
            <form action="newConsulta" method="GET">
            <div class="form-group row">
                    
                    <div class="col-6">
                    <label for="example-text-input" class="col-1 col-form-label">Paciente:</label>
                        <select  name="id_user" class="form-control">
                        <? foreach($pacientes as $key){?>
                            <option value="<?echo $key->id;?>" ><?echo $key->nome;?></option>
                        <?}?>
                        </select>
                    </div>

                    <style> #postsion {margin-top:20px;}</style>
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">Peso:</label>
                        <input class="form-control" name="peso" type="text"  id="example-text-input" >
                    </div>
                    
                    <div class="col-2">
                        <label for="example-text-input" class="col-0 col-form-label">IMC:</label>
                        <input class="form-control" name="imc"  type="text"  id="example-text-input" >
                    </div>
                    
                    <div class="col-2">
                    <label for="example-text-input" class="col-0 col-form-label">GC %:</label>
                        <input class="form-control" name="gc"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Circunferência do braço:</label>
                        <input class="form-control" name="c_braco"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Circunferência da cintura:</label>
                        <input class="form-control" name="c_cintura"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Circunferência do abdômen:</label>

                        <input class="form-control" name="c_abs"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                    <label for="example-text-input" class="col-0 col-form-label">Dobra cutânea do bíceps:</label>

                        <input class="form-control" name="d_bic"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Dobra cutânea do tríceps:</label>
                        <input class="form-control" name="d_tri"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Dobra cutânea do suprailiaca:</label>
                        <input class="form-control" name="d_supili"  type="text"  id="example-text-input" >
                    </div>
                    <div class="col-3" id="postsion">
                        <label for="example-text-input" class="col-0 col-form-label">Dobra cutânea do subescapular:</label>
                        <input class="form-control" name="d_subesc"  type="text"  id="example-text-input" >
                    </div>
            </div>
                            
            <button type="submit"  class="btn btn-primary" style="background:#5cadd6; margin-top:20px; ">Salvar</button>
   
            </form>
        </div>
    </div>

@endsection

