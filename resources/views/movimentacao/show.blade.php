@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes da movimentacao</h1>
    </div>

    <form class="form-horizontal" action="/movimentacao/{{$movimentacao->cd_movimentacao}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/movimentacao/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/movimentacao/" class="btn btn-default">Listagem</a>
            <a href="/movimentacao/{{$movimentacao->cd_movimentacao}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$movimentacao->nm_movimentacao}}</dd>
                <dt>Conta:</dt>
                <dd>{{$movimentacao->conta->nm_conta}}</dd>
                <dt>Valor:</dt>
                <dd>{{money($movimentacao->vl_movimentacao, 'BRL')}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop