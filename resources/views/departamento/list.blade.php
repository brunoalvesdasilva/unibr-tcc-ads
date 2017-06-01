@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá criar, editar e excluir os departamentos no sistema.'>
        <h1>Listagem de departamentos</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/departamento/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/departamento/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/departamento" class="btn btn-default" data-intro='Clique aqui para atualizar a página.'>Atualizar</a>
            <a href="/departamento/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
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
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaDepartamentos as $departamento)
            <tr>
                <td>{{$departamento->cd_departamento}}</td>
                <td>{{$departamento->nm_departamento}}</td>
                <td><a href="/departamento/{{$departamento->cd_departamento}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center"/>
                    Não há departamentos cadastrados
                    </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop