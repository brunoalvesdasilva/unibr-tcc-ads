@extends('layout/public')
@section('content')
<<<<<<< HEAD
    <div class="component-title">
        <h1>Cadastro de chamado</h1>
=======
      <div class="component-title" data-intro='Nessa tela você irá cadastrar um novo chamado no sistema.'>
        <h1>Cadastro de chamados</h1>
>>>>>>> ac5ac8ab50a298bf490854e6e7547ce896ad473e
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/chamado" class="btn btn-default">Listagem</a>
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
        <form class="form-horizontal" action="/chamado" method="POST">
            <div class="form-group">
                <label for="ds_chamado" class="col-md-4 control-label">Descrição do Chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="ds_chamado" placeholder="Nome" required />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_abertura_chamado" class="col-md-4 control-label">Data abertura chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="dt_abertura_chamado" value="{{date('d/m/Y')}}" required data-calendario="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_fechamento_chamado" class="col-md-4 control-label">Data fechamento chamado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="dt_fechamento_chamado" value="{{date('d/m/Y', strtotime('+1 week'))}}" required data-calendario="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_contrato" class="col-md-4 control-label">Contrato</label>
                <div class="col-md-6">
                    {{Form::select('cd_contrato', $contratos, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_usuario_autor" class="col-md-4 control-label">Autor do Chamado</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario_autor', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_usuario_responsavel" class="col-md-4 control-label">Responsável pelo serviço</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario_responsavel', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>            
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Cadastrar</button>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop