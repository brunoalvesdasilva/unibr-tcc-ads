@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contas</h1>
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
                <label for="ic_tipo_conta" class="col-md-4 control-label">Tipo de conta :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_tipo_conta" name="ic_tipo_conta" value="POUPANCA"> Poupança
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_tipo_conta" name="ic_tipo_conta" value="CORRENTE"> Corrente
                </label>
            </div>
            <div class="form-group">
                <label for="nm_conta" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_conta" name="nm_conta" placeholder="Nome da conta"/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_agencia_conta" class="col-md-4 control-label">Agência :</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="cd_agencia_conta" name="cd_agencia_conta" placeholder="Nº da agência"/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_numero_conta" class="col-md-4 control-label">Conta :</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="cd_numero_conta" name="cd_numero_conta" placeholder="Nº da conta"/>
                </div>
            </div>
            <div class="form-group">
                <label for="vl_inicial_conta" class="col-md-4 control-label">Valor Inicial:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_inicial_conta" name="vl_inicial_conta" placeholder="Valor inicial R$" />
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