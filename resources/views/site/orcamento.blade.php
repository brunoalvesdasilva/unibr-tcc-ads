@extends('layout/site')
@section('content')

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="pb-4 text-secondary">Escolha os produtos a serem cotados</h2>
            </div>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success text-center">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="row">
                    
            @foreach($listaProdutos as $produto)
            <div class="p-3 align-self-center col-md-4">
                <div class="card">
                    <div class="card-block p-5">
                        <h3>{{$produto->nm_produto}}</h3>
                        <h1>
                            <sup>R$</sup> {{dinheiro($produto->vl_produto)}} 
                        </h1>
                        <hr>
                        <img class="img-fluid d-block" src="{{$produto->im_produto}}">
                        <a href="/orcamento/cotar/{{$produto->cd_produto}}" class="btn btn-dark btn-block">Adicionar a cotação</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop