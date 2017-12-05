@extends('layout/site')
@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="pb-4 text-secondary">NOSSOS SERVIÇOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="align-self-center text-md-right text-center col-md-4">
                <h3 class="text-primary">VENDA DE AR CONDICIONADO</h3>
                <p class="mb-5">Compre os melhores ar condicionados do mercado com preços exclusivos</p>
                <h3 class="text-primary">INSTALAÇÃO DE AR CONDICIONADO</h3>
                <p class="mb-5">Não sabe como instalar o ar condicionado que comprou? Calma, fazemos esse serviço para você!</p>
            </div>
            <div class="my-3 col-md-4">
                <img class="img-fluid d-block ml-1 mx-auto" src="/img/0/features.png">
            </div>
            <div class="align-self-center text-md-left text-center col-md-4">
                <h3 class="text-primary">MANUTENÇÃO DE AR CONDICIONADO</h3>
                <p class="mb-5">Seu ar condicionado parou de funcionar? Solicite a visita técnica de nossos técnicos.</p>
                <h3 class="text-primary">LIMPEZA E HIGIENIZAÇÃO DE AR CONDICIONADO</h3>
                <p class="mb-5">Seu ar condicionado não está resfriando o ambiente?&nbsp;</p>
            </div>
        </div>
    </div>
</div>
<div class="p-5 gradient-overlay bg-secondary">
    <div class="container">
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
                        <p>{{$produto->ds_produto}}</p>
                        <a href="/orcamento" class="btn btn-dark btn-block">Cotar</a>
                    </div>
                </div>
            </div>
            @endforeach
                
        </div>
    </div>
</div>
@stop