@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Listagem de serviços</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/servico/help" class="btn btn-default">Ajuda</a>
            <a href="/servico/pdf" class="btn btn-default">PDF</a>
            <a href="/servico" class="btn btn-default">Atualizar</a>
            <a href="/servico/create" class="btn btn-default">Novo Registro</a>
        </div>
    </div>
        
    <table class="table table-striped table-hovered table-condesend">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Valor do serviço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaServico as $servico)
            <tr>
                <td>{{$servico->cd_servico}}</td>
                <td>{{$servico->nm_servico}}</td>
                <td>{{$servico->vl_servico}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ver <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/servico/{{$servico->cd_servico}}/edit">Editar</a></li>
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