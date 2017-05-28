@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de Fornecedores</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/movimentacao/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="nm_movimentacao" class="col-md-4 control-label">Movimentação :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_movimentacao" name="nm_movimentacao" placeholder="Nome da movimentação" />
                </div>
            </div>
            <div class="form-group">
                <label for="dt_movimentacao" class="col-md-4 control-label">Data da movimentação :</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" id="dt_movimentacao" name="dt_movimentacao" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_nf_movimentacao" class="col-md-4 control-label">NF :</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="cd_nf_movimentacao" name="cd_nf_movimentacao" placeholder="Nº NF" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cpf_pessoa" class="col-md-4 control-label">Valor :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_movimentacao" name="vl_movimentacao" placeholder="Valor da movimentação" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_contrato" class="col-md-4 control-label">Contrato :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_contrato" name="cd_contrato"/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_conta" class="col-md-4 control-label">Conta :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_conta" name="cd_conta"/>
                </div>
            </div>
            <div class="form-group">
                <label for="ds_movimentacao" class="col-md-4 control-label">Descrição :</label>
                <div class="col-md-6">
                    <textarea type="text" rows="3" class="form-control" id="ds_movimentacao" name="ds_movimentacao" placeholder="Descrição da movimentação" />
                    </textarea>
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