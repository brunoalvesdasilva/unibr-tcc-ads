@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá criar, editar e excluir os registros de produtos cadastrados no sistema.'>
        <h1>Listagem do produto</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/produto/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/produto/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/produto" class="btn btn-default" data-intro='Clique aqui para atualizar a tela.'>Atualizar</a>
            <a href="/produto/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
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
                <th>Valor</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listaProdutos as $produto)
            <tr>
                <td>{{$produto->cd_produto}}</td>
                <td>{{$produto->nm_produto}}</td>
                <td>{{dinheiro($produto->vl_produto)}}</td>
                <td><a href="/produto/{{$produto->cd_produto}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há produtos cadastrados
                </div>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop