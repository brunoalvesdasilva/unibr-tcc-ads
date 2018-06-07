@extends('layout/private')
@section('content-private')

<div class="text-center">
    <h2 class="pb-4 text-secondary">Abaixo estão a lista dos seus orçamentos!</h2>
</div>

<div class="col-md-12">

    <div class="p-4">
        <a href="/orcamento/cadastrar" class="btn btn-primary btn-block">Clique aqui para abrir um novo orçamento</a>
    </div>

    <div id="accordion" class="accordion">

        @forelse($listaContratos as $indice => $contrato)
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse{{$contrato->cd_contrato}}">
                <strong>#{{$contrato->cd_contrato}} - Itens: {{$contrato->qt_itens_contrato}} - Valor: R$ {{dinheiro($contrato->vl_contrato)}}</strong> 
                <span class="badge badge-pill badge-warning float-right">
                Aberto em {{$contrato->dt_contrato->format('d/m/Y')}}
                </span>
            </div>
            <div id="collapse{{$contrato->cd_contrato}}" class="collapse {{!$indice?'show':''}}" data-parent="#accordion">
                <div class="card-body">
                    
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
        @empty
        <p class="text-center p-4">
            Você não tem nenhum orçamento para consulta
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