@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Listagem de departamentos</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/departamento/help" class="btn btn-default">Ajuda</a>
            <a href="/departamento/pdf" class="btn btn-default">PDF</a>
            <a href="/departamento" class="btn btn-default">Atualizar</a>
            <a href="/departamento/create" class="btn btn-default">Novo Registro</a>
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
        @forelse($listaDepartamentos as $departamento)
            <tr>
                <td>{{$departamento->cd_departamento}}</td>
                <td>{{$departamento->nm_departamento}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ver <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/departamento/{{$departamento->cd_departamento}}/edit">Editar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há departamentos cadastrados
                    </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop