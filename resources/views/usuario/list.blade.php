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
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaUsuario as $usuario)
            <tr>
                <td>{{$usuario->cd_usuario}}</td>
                <td>{{$usuario->nm_usuario}}</td>
                <td><a href="/usuario/{{$usuario->cd_usuario}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center"/>
                    Não há usuarios cadastrados
                    </div>
            </tr>
        @endforelse
        </tbody>           
    </table>
@stop