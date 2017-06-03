@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Listagem de movimentações</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/movimentacao/help" class="btn btn-default">Ajuda</a>
            <a href="/movimentacao/pdf" class="btn btn-default">PDF</a>
            <a href="/movimentacao" class="btn btn-default">Atualizar</a>
            <a href="/movimentacao/create" class="btn btn-default">Novo Registro</a>
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