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
            <a href="/contrato/{{$contrato->cd_contrato}}/edit" class="btn btn-default">Editar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
    </form>
    
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Valor do Contrado:</dt>
                <dd>{{dinheiro($contrato->vl_contrato)}}</dd>
                <dt>Tipo de Contrato:</dt>
                <dd>
                    @if($contrato->ic_tipo_compra_venda=="compra")
                        Compra
                    @else
                        Venda
                    @endif
                </dd>
                @if($contrato->ic_situacao_aprovado_reprovado!="aguardando")
                    <dt>Parcela Atual:</dt>
                    <dd>{{$contrato->cd_parcela_atual}}</dd>
                    <dt>Total de Parcelas:</dt>
                    <dd>{{$contrato->cd_parcela_total}}</dd>
                @endif
                <dt>Pessoa:</dt>
                <dd>{{$contrato->pessoa->nm_pessoa}}</dd>
            </dl>
        
            @if($contrato->ic_situacao_aprovado_reprovado=="aguardando")
            <div class="component-barra-menu">
                <div class="btn-group btn-group-justified" role="group">
                    <a href="/contrato/{{$contrato->cd_contrato}}/situacao/aprovacao" class="btn btn-success">Aprovar compra</a>
                    <a href="/contrato/{{$contrato->cd_contrato}}/situacao/reprovacao" class="btn btn-warning">Reprovar compra</a>
                </div>
            </div>
            @else
                @if($contrato->ic_situacao_aprovado_reprovado=="reprovado")
                    <div class="alert alert-danger">
                    Cotação reprovada
                    </div>
                @endif

                @if($contrato->ic_situacao_aprovado_reprovado=="aprovado")
                    <div class="alert alert-success">
                    Contrato aprovado
                    </div>
                @endif
            @endif

            
        
            <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Unitário</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contrato->produtos as $indice => $item)
                <tr>
                    <td>{{$indice+1}}</td>
                    <td>{{$item->produto->nm_produto}}</td>
                    <td>{{dinheiro($item->vl_produto)}}</td>
                    <td>{{$item->qt_produto}}</td>
                    <td>{{$parcial = dinheiro($item->vl_produto*$item->qt_produto)}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Nenhum produto vinculado ao orçamento</td>
                </tr>
                @endforelse
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="4">&nbsp;</td>
                    <td>{{dinheiro($contrato->vl_contrato)}}</td>
                </tr>
            </tfooter>
            </table>
        </div>
        </div>
    </div>
@stop