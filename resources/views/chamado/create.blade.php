@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de chamados</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/chamado/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="ds_chamado" class="col-md-4 control-label">Descrição do chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="ds_chamado" name="ds_chamado" placeholder="Descrição do Chamado" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_abertura_chamado" class="col-md-4 control-label">Abertura do Chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="dt_abertura_chamado" name="dt_abertura_chamado" placeholder="Abertura do Chamado" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_fechamento_chamado" class="col-md-4 control-label">Fechamento do Chamado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="dt_fechamento_chamado" name="dt_fechamento_chamado" placeholder="Fechamento do Chamado" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_contrato" class="col-md-4 control-label">Contrato :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="ds_servico" name="cd_contrato" placeholder="Contrato" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_responsavel" class="col-md-4 control-label">Responsavel pelo serviço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_responsavel" name="cd_responsavel" placeholder="Responsavel" />
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