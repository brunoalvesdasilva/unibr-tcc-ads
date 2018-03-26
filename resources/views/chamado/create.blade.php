@extends('layout/public')
@section('content')
<<<<<<< HEAD
    <div class="component-title">
        <h1>Cadastro de chamado</h1>
=======
      <div class="component-title" data-intro='Nessa tela você irá cadastrar um novo chamado no sistema.'>
        <h1>Cadastro de chamados</h1>
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
<<<<<<< HEAD
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
                    <input type="text" class="form-control"  name="dt_fechamento_chamado" value="{{date('d/m/Y')}}" required data-calendario="true" />
=======
            <a href="#/chamado/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/chamado/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de chamados.'>Listagem</a>
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
    
        
     @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="ds_chamado" class="col-md-4 control-label">Descrição do chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="ds_chamado" name="ds_chamado" placeholder="Descrição do Chamado" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_abertura_chamado" class="col-md-4 control-label">Abertura do Chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="dt_abertura_chamado" name="dt_abertura_chamado" placeholder="Abertura do Chamado" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_fechamento_chamado" class="col-md-4 control-label">Fechamento do Chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="dt_fechamento_chamado" name="dt_fechamento_chamado" placeholder="Fechamento do Chamado" />
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
                </div>
            </div>
            <div class="form-group">
                <label for="cd_contrato" class="col-md-4 control-label">Contrato</label>
                <div class="col-md-6">
                    {{Form::select('cd_contrato', $contratos, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
<<<<<<< HEAD
                <label for="cd_usuario_autor" class="col-md-4 control-label">Usuario Responsavel pelo Serviço</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario_autor', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_usuario_responsavel" class="col-md-4 control-label">Usuario Responsavel pelo Serviço</label>
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
=======
                <label for="cd_usuario" class="col-md-4 control-label">Usuario Responsavel pelo Serviço</label>
                <div class="col-md-6">
                    {{Form::select('cd_usuario', $usuarios, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>

>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
            </div>
        </form>
        </div>
        </div>
    </div>
@stop