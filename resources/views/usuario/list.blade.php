@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Listagem de usuarios</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/usuario/help" class="btn btn-default">Ajuda</a>
            <a href="/usuario/pdf" class="btn btn-default">PDF</a>
            <a href="/usuario" class="btn btn-default">Atualizar</a>
            <a href="/usuario/create" class="btn btn-default">Novo Registro</a>
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
                <td>Nome</td>
                <td>Data de cadastro</td>
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