@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do contato</h1>
    </div>

    <form class="form-horizontal" action="/contato/{{$contato->cd_contato}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contato/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/contato/" class="btn btn-default">Listagem</a>
            <a href="/contato/{{$contato->cd_contato}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$contato->nm_contato}}</dd>
                <dt>E-mail:</dt>
                <dd>{{$contato->nm_email_contato}}</dd>
                <dt>Descrição:</dt>
                <dd>{{$contato->ds_contato}}</dd>
                <dt>Data de cadastro:</dt>
                <dd>{{$contato->dt_contato->format('d/m/Y')}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop