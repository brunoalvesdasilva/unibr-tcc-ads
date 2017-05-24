@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Página Inicial</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btn-default">PDF</button>
            <button type="button" class="btn btn-default">Atualizar</button>
            <button type="button" class="btn btn-default">Novo Registro</button>
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
            <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Data de cadastro</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle">
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
                <td>Nome</td>
                <td>Data de cadastro</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle">
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