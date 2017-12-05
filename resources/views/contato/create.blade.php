@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contato</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contato/help" class="btn btn-default">Ajuda</a>
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
        <form class="form-horizontal" action="/contato" method="POST">
            <div class="form-group">
                <label for="nm_contato" class="col-md-4 control-label">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_contato" name="nm_contato" placeholder="Nome" />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_contato" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="ds_contato" name="ds_contato"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="vl_contato" class="col-md-4 control-label">Valor</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_contato" name="vl_contato" placeholder="R$ 0,00" data-dinheiro="true" required />
                </div>
            </div>
            <div class="form-group">
                <label for="im_contato" class="col-md-4 control-label">Foto</label>
                <div class="col-md-6">
                    <input type="file" data-loadimg=".component-preloader" data-srcimg="#im_contato" class="form-control"  placeholder="Foto" />
                    <input type="hidden" id="im_contato" name="im_contato" value="" />
                    <div class="component-preloader"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="qt_minima_contato" class="col-md-4 control-label">Quantidade minima</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_minima_contato" name="qt_minima_contato" placeholder="0" required />
                </div>
            </div>
            <div class="form-group">
                <label for="qt_maxima_contato" class="col-md-4 control-label">Quantidade máxima</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_maxima_contato" name="qt_maxima_contato" placeholder="0" required />
                </div>
            </div>
            <div class="form-group">
                <label for="qt_estoque_contato" class="col-md-4 control-label">Quantidade atual</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="qt_estoque_contato" name="qt_estoque_contato" placeholder="0" required />
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