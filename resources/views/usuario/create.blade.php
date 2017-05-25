@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de chamados</h1>
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
                <label for="cd_usuario" class="col-sm-2 control-label">Codigo :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cd_usuario" name="cd_usuairo" placeholder="Codigo" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_usuario" class="col-sm-2 control-label">Usuario :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_usuario" name="nm_usuario" placeholder="Usuario" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_senha" class="col-sm-2 control-label">Senha :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="nm_senha" name="nm_senha" placeholder="Senha" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_email" class="col-sm-2 control-label">Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="nm_email" name="nm_email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_departamento" class="col-sm-2 control-label">Departamento :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="cd_departamento" name="cd_departamento" placeholder="Departamento" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>

            </div>
        </form>
        </div>
        </div>
    </div>
@stop