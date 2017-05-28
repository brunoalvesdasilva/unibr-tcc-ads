@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de produto</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/produto/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/produto" method="POST">
            <div class="form-group">
                <label for="nm_produto" class="col-md-4 control-label">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_produto" name="nm_produto" placeholder="Nome" />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_produto" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="ds_produto" name="ds_produto"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="im_produto" class="col-md-4 control-label">Foto</label>
                <div class="col-md-6">
                    <input type="file" data-loadimg=".component-preloader" data-srcimg="#im_produto" class="form-control"  placeholder="Foto" />
                    <input type="hidden" id="im_produto" name="im_produto" value="" />
                    <div class="component-preloader"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Cadastrar</button>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop