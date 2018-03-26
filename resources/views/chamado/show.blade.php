@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes da chamado</h1>
    </div>

    <form class="form-horizontal" action="/chamado/{{$chamado->cd_chamado}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/chamado/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/chamado/" class="btn btn-default">Listagem</a>
            <a href="/chamado/{{$chamado->cd_chamado}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Descrição do Chamado:</dt>
                <dd>{{$chamado->ds_chamado}}</dd>
                <dt>Data Abertura:</dt>
                <dd>{{$chamado->dt_abertura_chamado->format('d/m/Y')}}</dd>
                <dt>Data Fechamento:</dt>
                <dd>{{$chamado->dt_fechamento_chamado->format('d/m/Y')}}</dd>
                <dt>Cód. do Contrato:</dt>
                <dd>{{$chamado->cd_contrato}}</dd>
                <dt>Usuario Responsavel pelo chamado:</dt>
                <dd>{{$chamado->cd_usuario_autor}}</dd>
                <dt>Usuario responsavel pelo servico:</dt>
                <dd>{{$chamado->cd_usuario_responsavel}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop