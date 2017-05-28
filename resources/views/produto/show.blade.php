@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do produto</h1>
    </div>

    <form class="form-horizontal" action="/produto/{{$produto->cd_produto}}" method="POST">
    {{ method_field('PUT') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/produto/help" class="btn btn-default">Ajuda</a>
            <a href="/produto/" class="btn btn-default">Listagem</a>
            <a href="/produto/{{$produto->cd_produto}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$produto->nm_produto}}</dd>
                <dt>Descrição:</dt>
                <dd>{{$produto->ds_produto}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop