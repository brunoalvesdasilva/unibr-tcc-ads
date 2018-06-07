@extends('layout/private')
@section('content-private')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="pb-4 text-secondary">Selecione os produtos para que sejam cotados</h2>
        </div>
    </div>
    <div class="row">
    @foreach($listaProdutos as $produto)
    <div class="col-md-4">
        <div class="card">
            <div class="card-block p-2">
                <h3 class="text-center">{{$produto->nm_produto}}</h3>
                <h2>
                    <sup>R$</sup> Sob consulta
                </h2>
                <hr>
                <img class="img-fluid d-block" src="{{$produto->im_produto}}">
                <a href="/orcamento/cotar/{{$produto->cd_produto}}" class="btn btn-dark btn-block">Adicionar a cotação</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@stop