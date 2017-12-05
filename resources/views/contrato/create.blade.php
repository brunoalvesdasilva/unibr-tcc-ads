@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contrato</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contrato/help" class="btn btn-default">Ajuda</a>
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
        <form class="form-horizontal" action="/contrato" method="POST">
            <div class="form-group">
                <label for="nm_contrato" class="col-md-4 control-label">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_contrato" name="nm_contrato" placeholder="Nome" />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_contrato" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="ds_contrato" name="ds_contrato"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="vl_contrato" class="col-md-4 control-label">Valor</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_contrato" name="vl_contrato" placeholder="R$ 0,00" data-dinheiro="true" required />
                </div>
            </div>
            <div class="form-group">
                <label for="im_contrato" class="col-md-4 control-label">Foto</label>
                <div class="col-md-6">
                    <input type="file" data-loadimg=".component-preloader" data-srcimg="#im_contrato" class="form-control"  placeholder="Foto" />
                    <input type="hidden" id="im_contrato" name="im_contrato" value="" />
                    <div class="component-preloader"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="qt_minima_contrato" class="col-md-4 control-label">Quantidade minima</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_minima_contrato" name="qt_minima_contrato" placeholder="0" required />
                </div>
            </div>
            <div class="form-group">
                <label for="qt_maxima_contrato" class="col-md-4 control-label">Quantidade máxima</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_maxima_contrato" name="qt_maxima_contrato" placeholder="0" required />
                </div>
            </div>
            <div class="form-group">
                <label for="qt_estoque_contrato" class="col-md-4 control-label">Quantidade atual</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_estoque_contrato" name="qt_estoque_contrato" placeholder="0" required />
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