@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá editar e excluir os registros do usuario.'>
        <h1>Detalhes do usuario</h1>
    </div>

    <form class="form-horizontal" action="/usuario/{{$usuario->cd_usuario}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/usuario/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/usuario/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de usuarios.'>Listagem</a>
            <a href="/usuario/{{$usuario->cd_usuario}}/edit" class="btn btn-default" data-intro='Clique aqui para editar os dados do usuario.'>Editar</a>
            <button type="submit" class="btn btn-danger" data-intro='Clique aqui para excluir o usuario.'>Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$usuario->nm_usuario}}</dd>
            </dl>
        </div>
        </div>
    </div>
@stop