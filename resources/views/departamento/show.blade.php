@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá editar e excluir os registros do departamento.'>
        <h1>Detalhes do departamento</h1>
    </div>

    <form class="form-horizontal" action="/departamento/{{$departamento->cd_departamento}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/departamento/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/departamento/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de departamentos.'>Listagem</a>
            <a href="/departamento/{{$departamento->cd_departamento}}/edit" class="btn btn-default" data-intro='Clique aqui para editar os dados do departamento.'>Editar</a>
            <button type="submit" class="btn btn-danger" data-intro='Clique aqui para excluir o departamento.'>Excluir</button>
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