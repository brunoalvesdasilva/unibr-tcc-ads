@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá editar ou excluir um serviço.'>
        <h1>Detalhes do serviço</h1>
    </div>

    <form class="form-horizontal" action="/servico/{{$servico->cd_servico}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/servico/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/servico/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de serviços.'>Listagem</a>
            <a href="/servico/{{$servico->cd_servico}}/edit" class="btn btn-default" data-intro='Clique aqui para editar os dados do servico.'>Editar</a>
            <button type="submit" class="btn btn-danger" data-intro='Clique aqui para excluir o serviço.'>Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$servico->nm_servico}}</dd>
                <dt>Valor:</dt>
                <dd>R$ {{dinheiro($servico->vl_servico)}}</dd>
                <dt>Descrição:</dt>
                <dd>{{$servico->ds_servico}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop