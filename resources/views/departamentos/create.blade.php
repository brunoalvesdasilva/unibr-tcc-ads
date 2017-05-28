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
                <label for="nm_departamento" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_departamento" name="nm_departamento" placeholder="Nome da empresa"/>
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