@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do departamento</h1>
    </div>

    <form class="form-horizontal" action="/produto/{{$departamento->cd_departamento}}" method="POST">
    {{ method_field('PUT') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/departamento/help" class="btn btn-default">Ajuda</a>
            <a href="/departamento/" class="btn btn-default">Listagem</a>
            <a href="/departamento/{{$departamento->cd_departamento}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$departamento->nm_departamento}}</dd>
            </dl>
        </div>
        </div>
    </div>
@stop