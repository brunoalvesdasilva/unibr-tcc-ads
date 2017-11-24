@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá manusear as informações dos serviços da empresa.'>
        <h1>Listagem de serviços</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/servico/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/servico/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/servico" class="btn btn-default" data-intro='Clique aqui para atualizar a página.'>Atualizar</a>
            <a href="/servico/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
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
                <th>Valor do serviço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaServico as $servico)
            <tr>
                <td>{{$servico->cd_servico}}</td>
                <td>{{$servico->nm_servico}}</td>
                <td>{{dinheiro($servico->vl_servico)}}</td>
                <td><a href="/servico/{{$servico->cd_servico}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há serviços cadastrados.
                </div>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop