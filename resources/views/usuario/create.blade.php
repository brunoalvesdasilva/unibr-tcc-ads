@extends('layout/public')
@section('content')
        <div class="component-title" data-intro='Nessa tela você irá cadastrar um novo usuario no sistema.'>
        <h1>Cadastro de usuarios</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/usuario/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
            <a href="/usuario/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de usuarios.'>Listagem</a>
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
    
        
     @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/usuario" method="POST">
            <div class="form-group">
                <label for="nm_usuario" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_usuario" name="nm_usuario" placeholder="Nome" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="nm_email" class="col-md-4 control-label">Email :</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="nm_email" name="nm_email" placeholder="Email" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="nm_senha" class="col-md-4 control-label">Senha :</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="nm_senha" name="nm_senha" placeholder="Senha" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_departamento" class="col-md-4 control-label">Departamento</label>
                <div class="col-md-6">
                    {{Form::select('cd_departamento', $departamentos, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </div>
            </div>
        </form>
        </div>

        </div>
    </div>
@stop