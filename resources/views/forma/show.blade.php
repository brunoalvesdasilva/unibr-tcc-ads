@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá editar ou excluir a forma.'>
        <h1>Detalhes da forma</h1>
    </div>

    <form class="form-horizontal" action="/forma/{{$formas->cd_forma_pagamento}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/forma/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/forma/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de formas.'>Listagem</a>
            <a href="/forma/{{$formas->cd_forma_pagamento}}/edit" class="btn btn-default" data-intro='Clique aqui para editar os dados da forma.'>Editar</a>
            <button type="submit" class="btn btn-danger" data-intro='Clique aqui para excluir a forma.'>Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Forma de Pagamento:</dt>
                <dd>{{$formas->nm_forma_pagamento}}</dd>
            </dl>
        </div>
        </div>
    </div>
@stop