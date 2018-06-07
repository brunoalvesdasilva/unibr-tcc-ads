@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá manusear as informações dos usuarios.'>
        <h1>Dashboard</h1>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    
    <div class="container-fluid">
    
    <div class="col-md-12 col-xs-12">
        <ul class="nav nav-pills component-counters" role="tablist">
            <li role="presentation" class="active"><a href="#">Chamados Abertos<span>{{$countChamado}}</span></a></li>
            <li role="presentation" class="active"><a href="#">Contratos Iniciados<span>{{$countContratos}}</span></a></li>
            <li role="presentation" class="active"><a href="#">Produtos em Estoque<span>{{$countProdutos}}</span></a></li>
            <li role="presentation" class="active"><a href="#">Usuários cadastrados<span>{{$countUsuarios}}</span></a></li>
        </ul>
    </div>
        
    <div class="row component-graph">
        <div class="col-md-6 col-xs-12">
            <h3 class="text-center">Chamado abertos no período</h3>
            <canvas id="chamadosAbertos" height="300" data-fechados="{{$sumFechados}}" data-abertos="{{$sumAbertos}}"></canvas>
        </div>
        
        <div class="col-md-6 col-xs-12">
            <h3 class="text-center">Entrada x Saídas</h3>
            <canvas id="conflitoSaldo" height="300" data-receitas="{{$sumReceitas}}" data-despesas="{{$sumDespesas}}"></canvas>
        </div>
    </div>
    </div>
@stop