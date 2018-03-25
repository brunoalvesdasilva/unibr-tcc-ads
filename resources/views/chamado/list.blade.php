@extends('layout/public')
@section('content')
 <div class="component-title" data-intro='Nessa tela você irá manusear as informações dos chamados.'>
        <h1>Listagem de chamados</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/chamado/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/chamado/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
            <a href="/chamado" class="btn btn-default" data-intro='Clique aqui para atualizar a página.'>Atualizar</a>
            <a href="/chamado/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
        </div>
    </div>
        
    <table class="table table-striped table-hovered table-condesend" data-intro='Aqui você confere todos os registros já cadastrados.'>
        <thead>
            <tr>
                <th>#</th>
                <th>Chamado</th>
                <th>Data Abertura</th>
                <th>Data Fechamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @forelse($listaChamado as $chamado)
            <tr>
                <td>{{$chamado->cd_chamado}}</td>
                <td>{{$chamado->ds_chamado}}</td>
                <td>{{$chamado->dt_abertura_chamado->format('d/m/Y')}}</td>
                <td>{{$chamado->dt_fechamento_chamado->format('d/m/Y')}}</td>
                <td><a href="/chamado/{{$chamado->cd_chamado}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="aling-center"/>
                    Não há chamados cadastrados
                    </div>
            </tr>
        @endforelse
        </tbody>           
    </table>
@stop