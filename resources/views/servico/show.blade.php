@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do serviço</h1>
    </div>

    <form class="form-horizontal" action="/servico/{{$servico->cd_servico}}" method="POST">
    {{ method_field('PUT') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/servico/help" class="btn btn-default">Ajuda</a>
            <a href="/servico/" class="btn btn-default">Listagem</a>
            <a href="/servico/{{$servico->cd_servico}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$servico->nm_servico}}</dd>
                <dt>Descrição:</dt>
                <dd>{{$servico->vl_servico}}</dd>
                <dt>Descrição:</dt>
                <dd>{{$servico->ds_servico}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop