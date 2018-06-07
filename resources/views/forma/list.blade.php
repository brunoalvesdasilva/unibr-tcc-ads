@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá manusear as informações das formas da empresa.'>
        <h1>Listagem de Formas de Pagamento</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/forma/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/forma/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/forma" class="btn btn-default" data-intro='Clique aqui para atualizar a tela.'>Atualizar</a>
            <a href="/forma/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
        </div>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table table-striped table-hovered table-condesend" data-intro='Aqui você confere todos os registros já cadastrados.'>
        <thead>
        <tr>
            <th>#</th>
            <th>Forma de Pagamento</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @forelse($listaFormas as $formas)
            <tr>
                <td>{{$formas->cd_forma_pagamento}}</td>
                <td>{{$formas->nm_forma_pagamento}}</td>
                <td><a href="/forma/{{$formas->cd_forma_pagamento}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="aling-center">
                    Não há formas cadastradas
                    </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop