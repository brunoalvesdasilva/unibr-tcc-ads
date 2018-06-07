@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá criar, editar e excluir os registros de fornecedors cadastrados no sistema.'>
        <h1>Listagem do Clientes</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/clientes/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/clientes/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/clientes" class="btn btn-default" data-intro='Clique aqui para atualizar a tela.'>Atualizar</a>
            <a href="/clientes/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
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
                <th>Nome</th>
                <th>Situação Cadastral</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listaClientes as $clientes)
            <tr>
                <td>{{$clientes->cd_pessoa}}</td>
                <td>{{$clientes->nm_pessoa}}</td>
                <td>{{$clientes->nm_situacao_cadastral,['ativo','inativo']}}</td>
                <td><a href="/clientes/{{$clientes->cd_pessoa}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há clientes cadastrados
                </div>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop