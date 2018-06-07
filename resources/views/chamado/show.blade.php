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
            <a href="/chamado/{{$chamado->cd_chamado}}/status" class="btn btn-default">Status</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Data Abertura:</dt>
                <dd>{{$chamado->dt_abertura_chamado->format('d/m/Y')}}</dd>
                <dt>Data Fechamento:</dt>
                <dd>{{$chamado->dt_fechamento_chamado->format('d/m/Y')}}</dd>
                <dt>Cód. do Contrato:</dt>
                <dd>#{{$chamado->cd_contrato}} ({{ucfirst($chamado->contrato->ic_tipo_compra_venda)}}) {{$chamado->contrato->pessoa->nm_pessoa}}</dd>
                <dt>Autor do Chamado:</dt>
                <dd>{{$chamado->autor->nm_usuario}}</dd>
                <dt>Responsável pelo serviço:</dt>
                <dd>{{$chamado->responsavel->nm_usuario}}</dd>
                <dt>Descrição do Chamado:</dt>
                <dd>{!!nl2br($chamado->ds_chamado)!!}</dd>
                @if($chamado->nm_localizacao)
                <dt>Local do evento:</dt>
                <dd><img width="100%" src="{{$chamado->nm_localizacao}}" /></dd>
                @endif
            </dl>
        
        </div>
        </div>
    </div>
@stop