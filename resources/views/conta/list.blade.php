@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá criar, editar e excluir os registros de contas cadastrados no sistema.'>
        <h1>Listagem de contas</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/conta/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página'>Ajuda</a>
            <a href="/conta/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF'>PDF</a>
            <a href="/conta" class="btn btn-default" data-intro='Clique aqui para atualizar a tela'>Atualizar</a>
            <a href="/conta/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro'>Novo Registro</a>
        </div>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table table-striped table-hovered table-condesend">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Valor do contrato</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @forelse($listaContas as $conta)
            <tr>
                <td>{{$conta->cd_conta}}</td>
                <td>{{$conta->nm_conta}}</td>
                <td>{{$conta->nm_tipo_conta}}</td>
                <td>{{$conta->vl_atual_conta}}</td>
                <td>
                    <div class="btn-group">
                        <a href="/conta/{{$conta->cd_conta}}" type="button" class="btn btn-default">Ver</a>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/conta/{{$conta->cd_conta}}/edit">Editar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="aling-center">
                    Não há contas cadastradas
                    </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop