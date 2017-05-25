@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Detalhes do produto</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/produto/help" class="btn btn-default">Ajuda</a>
            <a href="/produto/1/edit" class="btn btn-default">Editar</a>
            <a href="/produto/1" class="btn btn-danger">Excuir</a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>café</dd>
                <dt>Descrição:</dt>
                <dd>café</dd>
            </dl>
        
        </div>
        </div>
    </div>
@stop