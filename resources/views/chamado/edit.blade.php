@extends('layout/public')
@section('content')
      <div class="component-title" data-intro='Nessa tela você irá cadastrar um novo chamado no sistema.'>
        <h1>Cadastro de chamados</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/chamado/{{$chamado->cd_chamado}}" class="btn btn-default">Voltar</a>
            <a href="/chamado/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/chamado/{{$chamado->cd_chamado}}" method="POST">
            <div class="form-group">
                <label for="ds_chamado" class="col-md-4 control-label">Descrição do Chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="ds_chamado" placeholder="Nome" value="{{$chamado->ds_chamado}}" required />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_abertura_chamado" class="col-md-4 control-label">Data abertura chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="dt_abertura_chamado" value="{{$chamado->dt_abertura_chamado->format('d/m/Y')}}" required data-calendario="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_fechamento_chamado" class="col-md-4 control-label">Data fechamento chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="dt_fechamento_chamado" value="{{$chamado->dt_fechamento_chamado->format('d/m/Y')}}" required data-calendario="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_contrato" class="col-md-4 control-label">Contrato</label>
                <div class="col-md-6">
                    {{Form::select('cd_contrato', $contratos, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_usuario_autor" class="col-md-4 control-label">Responsavel pela abertura do chamado</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario_autor', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_usuario_responsavel" class="col-md-4 control-label">Responsavel pelo Serviço</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario_responsavel', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>            
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Editar</button>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop