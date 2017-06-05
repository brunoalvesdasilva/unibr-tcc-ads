@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes da movimentacao</h1>
    </div>

    <form class="form-horizontal" action="/movimentacao/{{$movimentacao->cd_movimentacao}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/movimentacao/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/movimentacao/" class="btn btn-default">Listagem</a>
            <a href="/movimentacao/{{$movimentacao->cd_movimentacao}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$movimentacao->nm_movimentacao}}</dd>
                <dt>Tipo:</dt>
                <dd>
                    @if($movimentacao->ic_tipo_movimentacao=="credito")
                        Crédito
                    @else
                        Débito
                    @endif
                </dd>
                <dt>Conta:</dt>
                <dd>{{$movimentacao->conta->nm_conta}}</dd>
                <dt>Data:</dt>
                <dd>{{$movimentacao->dt_movimentacao->format('d/m/Y')}}</dd>
                <dt>Cód. Nota Fiscal:</dt>
                <dd>{{$movimentacao->cd_nf_movimentacao}}</dd>
                <dt>Situação:</dt>
                <dd>
                    @if($movimentacao->ic_pago_sim_nao=="sim")
                        Movimentação paga
                    @else
                        Movimentação não paga
                    @endif
                </dd>
                <dt>Valor:</dt>
                <dd>{{dinheiro($movimentacao->vl_movimentacao)}}</dd>
                <dt>Descrição:</dt>
                <dd>{{nl2br($movimentacao->ds_movimentacao)}}</dd>
                <dt>Recorrente:</dt>
                <dd>
                    @if($movimentacao->ic_recorrente_sim_nao=="sim")
                        Movimentação recorrente
                    @else
                        Movimentação não recorrente
                    @endif
                </dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop