@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Listagem do produto</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/produto/help" class="btn btn-default">Ajuda</a>
            <a href="/produto/pdf" class="btn btn-default">PDF</a>
            <a href="/produto" class="btn btn-default">Atualizar</a>
            <a href="/produto/create" class="btn btn-default">Novo Registro</a>
        </div>
    </div>
        
    <table class="table table-striped table-hovered table-condesend">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Data de cadastro</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listaProdutos as $produto)
            <tr>
                <td>{{$produto->cd_produto}}</td>
                <td>{{$produto->nm_produto}}</td>
                <td>{{$produto->created_at->format('d/m/Y')}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ver <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/produto/{{$produto->cd_produto}}/edit">Editar</a></li>
                        </ul>
                    </div>
                </td>
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