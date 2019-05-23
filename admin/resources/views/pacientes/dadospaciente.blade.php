@extends('layouts.app')
@section('content')


<div class="row">

    <div class="col-sm-12">
        <div class="page-title-box">
	        <h4 class="page-title">Dados do Paciente</h4>
	        <div class="clearfix"></div>
        </div>
	</div>
    
</div>
<div class="content">
    <div class="container-fluid">
        <div class="portlet">
            <div class="portlet-heading" style="background:#5cadd6;">
                <h3 class="portlet-title">
                    Paciente: <? print($paciente['nome']); ?>
                </h3>
                    <div class="clearfix"></div>
                </div>
                <div id="bg-info" class="panel-collapse collapse show">
                <div class="portlet-body">
                <div class="row">
    <div class="col-sm-6 form-group g-mb-30">
        <label>Nome: </label>
        <input id="inputGroup1_1" value="<?  print($paciente['nome']);?>" class="form-control g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" type="text" disabled>
    </div>

    <div class="col-sm-1 form-group g-mb-30">
        <label>Genero: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['genero']);  ?>" disabled>
    </div>

    <div class="col-sm-1 form-group g-mb-30">
        <label>Idade: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['idade']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Altura: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['altura']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Peso: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['peso']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>IMC: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['imc']);  ?>" disabled>
    </div>
</div>


<div class="row">
    <div class="col-sm-12 form-group g-mb-30">
        <label>Motivo:</label>
        <textarea class="form-control" aria-label="With textarea" style="height:100px; resize:none" disabled><? print($paciente['motivo']);?></textarea>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 form-group g-mb-30">
        <label>Motivo:</label>
        <textarea class="form-control" aria-label="With textarea" style="height:100px; resize:none" disabled><? print($paciente['objetivo']);?></textarea>
    </div>
</div>

<div class="row">
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circunferencia Coxa: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_coxa']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circunferencia Cintura: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_cintura']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circ. Pescoço: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_pescoco']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circ. Braço: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_braco']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circ. Panturrilha: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_panturrilha']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Circ. Abdomen: </label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['circ_abdome']);  ?>" disabled>
    </div>
    
</div>

<div class="row">
    <div class="col-sm-1 form-group g-mb-30">
        <label>Biceps:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['biceps']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Triceps:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['triceps']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Sub Escapular:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['subEscapular']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>Supra Iliaca:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['supraIliaca']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Peitoral:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['peitoral']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Coxa:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['coxa']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>Coxa:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['panturrilha']);  ?>" disabled>
    </div>
    <div class="col-sm-1 form-group g-mb-30">
        <label>TMB:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['tmb']);  ?>" disabled>
    </div>
    <div class="col-sm-2 form-group g-mb-30">
        <label>peso Ideal:</label>
        <input class="form-control" name="gen" type="text"  id="example-text-input" value="<? print($paciente['pesoIdeal']);  ?>" disabled>
    </div>
    
</div>
</div>
</div>
    
</div>



@endsection


