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
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-heading"  style="background:#5cadd6; ">
                    <h3 class="portlet-title">
                        Evolução <?php  if(!empty($acomp->nome)){  print 'de ' . $acomp->nome ;  }?>
                    </h3>
                    
                    <div class="clearfix"></div>
                </div>
                <div id="bg-info" class="panel-collapse collapse show">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IMC</th>
                            <th>Peso</th>
                            <th>GC(%)</th>
                            <th>Cir. braço</th>
                            <th>Cir. cintura</th>
                            <th>Cir. abdomen</th>
                            <th>Dobra cutânea do bíceps</th>
                            <th>Dobra cutânea do tríceps</th>
                            <th>Dobra cutânea do suprailiaca</th>
                            <th>Dobra cutânea do subescapular</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? $i=1; foreach($acomp as $key){ ?>
                            <tr>
                                <td><?print $i; $i++?></td>
                                <td><?print $key->imc?></td>
                                <td><?print $key->peso?></td>
                                <td><?print $key->gc?></td>
                                <td><?print $key->c_braco?></td>
                                <td><?print $key->c_cintura?></td>
                                <td><?print $key->c_abs?></td>
                                <td><?print $key->d_bic?></td>
                                <td><?print $key->d_tri?></td>
                                <td><?print $key->d_supili?></td>
                                <td><?print $key->d_subesc?></td>
                                <td><?print date('d/m/Y - H:m', strtotime($key->data));?></td>
                            </tr>
                        <?}?>
                    </tbody>
				</div>
	    	</div>
		</div>
	</div>
@endsection
