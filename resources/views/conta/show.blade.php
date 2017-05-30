@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do produto</h1>
    </div>

    <form class="form-horizontal" action="/conta/{{$conta->cd_conta}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/conta/help" class="btn btn-default">Ajuda</a>
            <a href="/conta/" class="btn btn-default">Listagem</a>
            <a href="/conta/{{$conta->cd_conta}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$conta->nm_conta}}</dd>
                <dt>Agência:</dt>
                <dd>{{$conta->cd_agencia_conta}}</dd>
                <dt>Conta:</dt>
                <dd>{{$conta->cd_numero_conta}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop