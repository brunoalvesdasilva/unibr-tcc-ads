@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes da clientes</h1>
    </div>

    <form class="form-horizontal" action="/clientes/{{$clientes->cd_pessoa}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/clientes/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/clientes/" class="btn btn-default">Listagem</a>
            <a href="/clientes/{{$clientes->cd_pessoa}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Codigo:</dt>
                <dd>{{$clientes->cd_pessoa}}</dd>
                <dt>Nome:</dt>
                <dd>{{$clientes->nm_pessoa}}</dd>        
        </div>
        </div>
    </div>
@stop