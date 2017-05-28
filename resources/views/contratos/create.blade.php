@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contrato</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/usuario/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="ic_tipo_contrato" class="col-md-4 control-label">Tipo do contrato :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_tipo_contrato" name="ic_tipo_contrato" value="COMPRA"> Compra
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_tipo_contrato" name="ic_tipo_contrato" value="VENDA"> Venda
                </label>
            </div>
            <div class="form-group">
                <label for="cd_pessoa" class="col-md-4 control-label">Empresa :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_pessoa" name="cd_pessoa"/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_total_parcela" class="col-md-4 control-label">Quantidade de parcelas:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_total_parcela" name="cd_total_parcela" placeholder="Qt parcelas" />
                </div>
            </div>
            <div class="form-group">
                <label for="vl_contrato" class="col-md-4 control-label">Valor:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_contrato" name="vl_contrato" placeholder="Valor do contrato" />
                </div>
            </div>

            <div class="form-group">
                <label for="cd_parcela_atual" class="col-md-4 control-label">Parcela atual :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_parcela_atual" name="cd_parcela_atual" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>

            </div>
        </form>
        </div>
        </div>
    </div>
@stop