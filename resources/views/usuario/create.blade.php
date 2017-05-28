@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de usuários</h1>
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
                <label for="nm_usuario" class="col-md-4 control-label">Usuario :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_usuario" name="nm_usuario" placeholder="Nome do usuário" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_email" class="col-md-4 control-label">Email :</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="nm_email" name="nm_email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_senha" class="col-md-4 control-label">Senha :</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="nm_senha" name="nm_senha" placeholder="Senha" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_departamento" class="col-md-4 control-label">Departamento :</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="cd_departamento" name="cd_departamento" placeholder="Departamento" />
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