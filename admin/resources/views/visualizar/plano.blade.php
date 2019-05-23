@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-sm-12">
	        <div class="page-title-box">
				<h3 class="text-primary font-bold mt-0">Seus planos alimentares:</h3>
	        </div>
			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">Nº</th>
					<th scope="col">Observações</th>
					<th scope="col">Diagnótico</th>
					<th scope="col">Data</th>
					</tr>
				</thead>
				<tbody>
				<?$i = 0;?>
				@foreach($plano['planos'] as $k)
				<?$i++;?>
					<tr>
						<th>{{$i}}º</th>
						<th>{{$k->obs}}</th>
						<th><a target="_blank" href="https://www.ludgerosangaletti.com.br/admin/public/uploads/{{$k->imagem}}">Clique para ver!</a></th>
						<th>{{date("d/m/Y H:i:s",strtotime($k->created_at))}}</th>
					</tr>
				@endforeach
				</tbody>
			</table>
	    </div>
	</div>
@endsection

