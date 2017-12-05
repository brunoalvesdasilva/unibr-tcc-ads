@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do contrato</h1>
    </div>

    <form class="form-horizontal" action="/contrato/{{$contrato->cd_contrato}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contrato/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/contrato/" class="btn btn-default">Listagem</a>
            <!--a href="/contrato/{{$contrato->cd_contrato}}/edit" class="btn btn-default">Editar</a-->
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{$contrato->pessoa->nm_pessoa}}</dd>
                <dt>Valor:</dt>
                <dd>{{dinheiro($contrato->vl_contrato)}}</dd>
                <dt>Parcelamento:</dt>
                <dd>{{$contrato->cd_parcela_atual}} de {{$contrato->cd_parcela_total}}</dd>
                <dt>Tipo de contrato:</dt>
                <dd>{{$contrato->ic_tipo_compra_venda}}</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop