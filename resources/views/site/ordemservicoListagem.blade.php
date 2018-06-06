@extends('layout/private')
@section('content-private')

<div class="text-center">
    <h2 class="pb-4 text-secondary">Abaixo estão a lista de chamados por contratos!</h2>
</div>

<div class="col-md-12">

    <div class="p-4">
        <a href="/ordemservico/cadastrar" class="btn btn-primary btn-block">Clique aqui para abrir um novo chamado</a>
    </div>

    <div id="accordion" class="accordion">

        @forelse($listaChamados as $indice => $chamado)
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse{{$chamado->cd_chamado}}">
                <strong>#{{$chamado->cd_chamado}} - {{$chamado->contrato->pessoa->nm_pessoa}}</strong> 
                <span class="badge badge-pill badge-success float-right">
                Aberto em {{$chamado->dt_abertura_chamado->format('d/m/Y')}}
                </span>
            </div>
            <div id="collapse{{$chamado->cd_chamado}}" class="collapse {{!$indice?'show':''}}" data-parent="#accordion">
                <div class="card-body">
        
                    <dl class="dl-horizontal">
                        <dt>Descrição do Chamado:</dt>
                        <dd>{{$chamado->ds_chamado}}</dd>
                        <dt>Data Abertura:</dt>
                        <dd>{{$chamado->dt_abertura_chamado->format('d/m/Y')}}</dd>
                        <dt>Data Fechamento:</dt>
                        <dd>{{$chamado->dt_fechamento_chamado->format('d/m/Y')}}</dd>
                        <dt>Cód. do Contrato:</dt>
                        <dd>#{{$chamado->cd_contrato}} ({{ucfirst($chamado->contrato->ic_tipo_compra_venda)}}) {{$chamado->contrato->pessoa->nm_pessoa}}</dd>
                        <dt>Autor do Chamado:</dt>
                        <dd>{{$chamado->autor->nm_usuario}}</dd>
                        <dt>Responsável pelo serviço:</dt>
                        <dd>{{$chamado->responsavel->nm_usuario}}</dd>
                    </dl>

                </div>
            </div>
        </div>
        @empty
        <p class="text-center p-4">
            Você não tem nenhum chamado aberto
        </p>
        @endforelse

    </div>
            
</div>

<style>
.accordion .card-header{
    cursor: pointer;
}
</style>

@stop