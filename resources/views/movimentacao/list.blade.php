@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá manusear as informações das movimentações da empresa.'>
        <h1>Listagem de Movimentação</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/movimentacao/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/movimentacao/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/movimentacao" class="btn btn-default" data-intro='Clique aqui para atualizar a tela.'>Atualizar</a>
            <a href="/movimentacao/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
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
                <th>Tipo</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($listaMovimentacoes as $movimentacao)
            <tr>
                <td>{{$movimentacao->cd_movimentacao}}</td>
                <td>{{$movimentacao->conta->nm_conta}}</td>
                <td>{{$movimentacao->nm_movimentacao}}</td>
                <td>{{$movimentacao->dt_movimentacao->format('d/m/Y')}}</td>
                <td>{{dinheiro($movimentacao->vl_movimentacao)}}</td>
                <td><a href="/movimentacao/{{$movimentacao->cd_movimentacao}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há movimentações cadastradas
                </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop