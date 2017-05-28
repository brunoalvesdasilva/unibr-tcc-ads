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
        
    <table class="table table-striped table-hovered table-condesend">
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>Tipo</td>
                <td>Nome</td>
                <td>Data</td>
                <td>$</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ver <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Excluir</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>Tipo</td>
                <td>Nome</td>
                <td>Data</td>
                <td>$</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ver <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Excluir</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop