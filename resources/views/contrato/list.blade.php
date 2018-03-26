@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você poderá criar, editar e excluir os registros de contratos cadastrados no sistema.'>
        <h1>Listagem do contrato</h1>
    </div>
        
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/contrato/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="#/contrato/pdf" class="btn btn-default" data-intro='Clique aqui para baixar um relatório da página atual em PDF.'>PDF</a>
<<<<<<< HEAD
            <a href="/contrato" class="btn btn-default" data-intro='Clique aqui para atualizar a página.'>Atualizar</a>
            <a href="/contrato/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a>
=======
            <a href="/contrato" class="btn btn-default" data-intro='Clique aqui para atualizar a tela.'>Atualizar</a>
            <!--a href="/contrato/create" class="btn btn-default" data-intro='Clique aqui para adicionar um novo registro.'>Novo Registro</a-->
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
                <th>Valor</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listaContratos as $contrato)
            <tr>
                <td>{{$contrato->cd_contrato}}</td>
                <td>{{$contrato->pessoa->nm_pessoa}}</td>
                <td>{{dinheiro($contrato->vl_contrato)}}</td>
                <td><a href="/contrato/{{$contrato->cd_contrato}}" type="button" class="btn btn-default">Ver</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="aling-center">
                    Não há contratos cadastrados
                </div>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop