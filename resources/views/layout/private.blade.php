@extends('layout/site')
@section('content')


<div class="py-5 bg-light">
    <div class="container">
        <div class="row d-none d-lg-block d-xl-block">
            <div class="col-md-12">
                <h2 class="pb-2 text-primary profile">Bem vindo, {{Session::get('client_name')}}.</h2>
            </div>
        </div>
        
        @if(Session::has('message'))
        <div class="alert alert-success text-center">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-3">
                <div class="list-group d-none d-lg-block d-xl-block">
                    <a href="/orcamento" class="list-group-item list-group-item-action">Meus orçamentos</a>
                    <a href="/ordemservico" class="list-group-item list-group-item-action">Meus chamado</a>
                    <a href="/cliente/logout" class="list-group-item list-group-item-action">Sair</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                @yield('content-private')
                </div>
            </div>
        </div>

    </div>
</div>
@stop
