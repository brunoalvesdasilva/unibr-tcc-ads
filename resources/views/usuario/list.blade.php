@extends('layout/public')
@section('content')
     <div class="component-title" data-intro='Nessa tela você irá manusear as informações dos usuarios.'>
        <h1>Listagem de usuarios</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/usuario/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/usuario/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/usuario" class="btn btn-default" data-intro='Clique aqui para atualizar a página.'>Atualizar</a>
            <a href="/usuario/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
        </div>
    </div>
        
    <table class="table table-striped table-hovered table-condesend" data-intro='Aqui você confere todos os registros já cadastrados.'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaUsuario as $usuario)
            <tr>
                <td>{{$usuario->cd_usuario}}</td>
                <td>{{$usuario->nm_usuario}}</td>
                <td>{{$usuario->nm_email}}</td>
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