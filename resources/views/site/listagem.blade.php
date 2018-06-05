@extends('layout/private')
@section('content-private')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="pb-4 text-secondary">Abaixo estão a lista de produtos que serão cotados!</h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>Código</th>
                <th>Produto</th>
                <th>R$ (Unitário)</th>
                <th>R$ (Total)</th>
                <th>Remover</th>
            </tr>
            </thead>
        
            <tbody>
            @forelse($listaProdutos as $produto)
                <tr>
                    <td>{{$produto->cd_produto}}</td>
                    <td>{{$produto->nm_produto}}</td>
                    <td>{{dinheiro($produto->vl_produto)}}</td>
                    <td>(x{{$produto->qt_produto}}) {{dinheiro($produto->vl_total)}}</td>
                    <td>
                        <a href="/orcamento/remover/{{$produto->cd_produto}}" class="btn btn-secondary">-1</a>
                        <a href="/orcamento/cotar/{{$produto->cd_produto}}" class="btn btn-primary">+1</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="5">Não há produtos para serem cotatos</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <a href="/orcamento" class="btn btn-info btn-block">Cotar mais produtos</a>
        </div>
        @if(count($listaProdutos))
        <div class="col-md-6 text-center">
            <a href="/orcamento/save" class="btn btn-success btn-block">Finalizar cotação</a>
        </div>
        @endif
    </div>
</div>
@stop