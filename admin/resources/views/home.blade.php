@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Inicio</h4>
<!--                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Minton</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Form Elements</li>
                </ol> -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

   

    <div class="row" style="margin-top:5%;">
        <div class="col-12">
            @if(Auth::user()->idPermissao == 1)
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box" style="padding:28px;" >
                        <h3 class="text-primary counter font-bold mt-0">{{ $arrayPacientes['contaPacientes'] }}</h3>
                        <p class="text-muted mb-0">Total de pacientes cadastrados</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Plano alimentar</h3>
                        <p class="text-muted mb-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPlano">
                              Adicionar arquivo
                            </button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Diagnóstico de imagem</h3>
                        <p class="text-muted mb-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalDiag">
                              Adicionar arquivo
                            </button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Lista de substituição</h3>
                        <p class="text-muted mb-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalSubs">
                              Adicionar arquivo
                            </button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" >
                    <div class="widget-simple text-center card-box"style="background:#5cadd6" >
                        <img src="https://ludgerosangaletti.com.br/logoNovo.png" class="img-fluid" alt="" style="width: 250px;">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Lista de Treinamentos</h3>
                        <p class="text-muted mb-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalTrain">
                              Adicionar arquivo
                            </button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Proximas Consultas</h3>
                        <p class="text-muted mb-0">
                            <a href="consulta/lista">
                                <button type="button" class="btn btn-primary" >
                                Consulta
                                </button>
                            </a>
                        </p>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Agendamento Consultas</h3>
                        <p class="text-muted mb-0">
                            <a href="consulta/agendar">
                                <button type="button" class="btn btn-primary" >
                                Agendar
                                </button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget-simple text-center card-box">
                        <h3 class="text-primary font-bold mt-0">Recordatório de Pacientes</h3>
                        <p class="text-muted mb-0">
                            <a href="recordatorio/lista">
                                <button type="button" class="btn btn-primary" >
                                Recordatório
                                </button>
                            </a>
                        </p>
                    </div>
                </div>


            </div>

            <!-- Modal Diagnóstico -->
            <div class="modal fade" id="exampleModalDiag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Diagnóstico de imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{ Form::open(['url' => 'diagnostico/salvar', 'method' => 'post', 'files' => true]) }}
                        <div class="col-md-12">
                            {{ Form::label('idPaciente', 'Paciente') }}
                            <select name="idPaciente" id="idPaciente" class="form-control">
                                <option value=""> Selecione o paciente</option>
                                @foreach ($arrayPacientes['pacientes'] as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="col-12">
                            {{ Form::label('imagem', 'Imagem') }}
                            {{ Form::input('file', 'imagem', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class=" col-sm-12">
                            {{ Form::label('obs', 'Observações') }}
                            {{ Form::textarea('obs', null, ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 p-4 text-right">
                            {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Plano alimentar -->
            <div class="modal fade" id="exampleModalPlano" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Plano alimentar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{ Form::open(['url' => 'plano/salvar', 'method' => 'post','files' => true]) }}
                        <div class="col-md-12">
                            {{ Form::label('idPaciente', 'Paciente') }}
                            <select name="idPaciente" id="idPaciente" class="form-control">
                                <option value=""> Selecione o paciente</option>
                                @foreach ($arrayPacientes['pacientes'] as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="col-12">
                            {{ Form::label('imagem', 'Imagem') }}
                            {{ Form::input('file', 'imagem', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class=" col-sm-12">
                            {{ Form::label('obs', 'Observações') }}
                            {{ Form::textarea('obs', null, ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 p-4 text-right">
                            {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal lista de substituição -->
            <div class="modal fade" id="exampleModalSubs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lista de substituição</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{ Form::open(['url' => 'listasub/salvar', 'method' => 'post','files' => true]) }}
                        <div class="col-md-12">
                            {{ Form::label('idPaciente', 'Paciente') }}
                            <select name="idPaciente" id="idPaciente" class="form-control">
                                <option value=""> Selecione o paciente</option>
                                @foreach ($arrayPacientes['pacientes'] as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="col-12">
                            {{ Form::label('imagem', 'Imagem') }}
                            {{ Form::input('file', 'imagem', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class=" col-sm-12">
                            {{ Form::label('obs', 'Observações') }}
                            {{ Form::textarea('obs', null, ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 p-4 text-right">
                            {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal treinamento -->
            <div class="modal fade" id="exampleModalTrain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lista de Treinamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{ Form::open(['url' => 'treinamento/salvar', 'method' => 'post','files' => true]) }}
                        <div class="col-md-12">
                            {{ Form::label('idPaciente', 'Paciente') }}
                            <select name="idPaciente" id="idPaciente" class="form-control">
                                <option value=""> Selecione o paciente</option>
                                @foreach ($arrayPacientes['pacientes'] as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="col-12">
                            {{ Form::label('imagem', 'Imagem') }}
                            {{ Form::input('file', 'imagem', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class=" col-sm-12">
                            {{ Form::label('obs', 'Observações') }}
                            {{ Form::textarea('obs', null, ['class' => 'form-control']) }}
                        </div>
                        
                        <div class="col-12 p-4 text-right">
                            {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>

            @elseif(Auth::user()->idPermissao == 3)
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget-simple text-center card-box">
                        @if(!empty($consulta[0]))
                        <!-- <h3 class="text-primary font-bold mt-0">{{ isset($consulta) ?$consulta[0]->data : 'Não há, solicite'}}</h3> -->
                        <h3 class="text-primary font-bold mt-0">{{ $consulta[0]->data }}</h3>
                        @else
                        <h3 class="text-primary font-bold mt-0">Não há, solicite uma consulta</h3>                    
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-simple text-center card-box">
                        @if(!empty($arrayPacientes['diagnostico']))
                            <a href="admin/public/visualizacao/diagnostico/" target="_blank"><h3 class="text-primary font-bold mt-0"> Ver meus diagnósticos</h3></a>
                            <p class="text-muted mb-0">{{count($arrayPacientes['diagnostico'])}} dignostico(s).</p>
                        @else
                            <h3 class="text-primary font-bold mt-0">Não há, solicite um exame</h3>   
                        @endif                 
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget-simple text-center card-box">
                        @if(!empty($arrayPacientes['planoAlimentar']))
                            <a href="admin/public/visualizacao/plano/" target="_blank"><h3 class="text-primary font-bold mt-0"> Ver meus planos alimentares</h3></a>
                            <p class="text-muted mb-0">{{count($arrayPacientes['planoAlimentar'])}} plano(s) alimentar(es).</p>
                        @else
                            <h3 class="text-primary font-bold mt-0">Não há, solicite um plano</h3>   
                        @endif                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-simple text-center card-box">
                        @if(!empty($arrayPacientes['listaSubstituicao']))
                            <a href="admin/public/visualizacao/lista-substituicao/" target="_blank"><h3 class="text-primary font-bold mt-0"> Ver minhas listas de subs.</h3></a>
                            <p class="text-muted mb-0">{{count($arrayPacientes['listaSubstituicao'])}} lista(s) de substituição(ões).</p>
                        @else
                            <h3 class="text-primary font-bold mt-0">Não há, solicite uma lista.</h3>   
                        @endif                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-simple text-center card-box">
                        @if(!empty($arrayPacientes['treinamentos']))
                            <a href="admin/public/treinamentos/" target="_blank"><h3 class="text-primary font-bold mt-0"> Ver meus treinamentos</h3></a>
                            <p class="text-muted mb-0">{{count($arrayPacientes['treinamentos'])}} treinamento(s).</p>
                        @else
                            <h3 class="text-primary font-bold mt-0">Não há, solicite um plano</h3>   
                        @endif                      
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
