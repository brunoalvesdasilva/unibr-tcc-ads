@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contratos</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contrato" class="btn btn-default">Listagem</a>
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
                <label for="vl_contrato" class="col-md-4 control-label">Valor do contrato</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="vl_contrato" placeholder="0,00" required data-dinheiro="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_tipo_compra_venda" class="col-md-4 control-label">Tipo de Contrato</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_compra_venda" value="compra" required /> Compra
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_compra_venda" value="venda" required /> Venda
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_parcela_atual" class="col-md-4 control-label">Parcela Atual</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="cd_parcela_atual" value="" />
                </div>
            </div>
            <div class="form-group">
                <label for="qt_itens_contrato" class="col-md-4 control-label">Quantidade</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="qt_itens_contrato" value="" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_parcela_total" class="col-md-4 control-label">Total de Parcelas</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="cd_parcela_total" value="" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_pessoa" class="col-md-4 control-label">Pessoa</label>
                <div class="col-md-6">
                    {{Form::select('cd_pessoa', $pessoas, NULL, ['class' => 'form-control', 'required'=>'required'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="cd_forma_pagamento" class="col-md-4 control-label">Forma de Pagamento</label>
                <div class="col-md-6">
                    {{Form::select('cd_forma_pagamento', $formas, NULL, ['class' => 'form-control', 'required'=>'required'])}}
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