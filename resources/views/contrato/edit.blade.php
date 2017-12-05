@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de contrato</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
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
        <form class="form-horizontal" action="/contrato/{{$contrato->cd_contrato}}" method="POST">
            <div class="form-group">
                <label for="nm_contrato" class="col-md-4 control-label">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_contrato" name="nm_contrato" placeholder="Nome" value="{{$contrato->nm_contrato}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_contrato" class="col-md-4 control-label">E-mail</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_email_contrato" name="nm_email_contrato" placeholder="Nome" value="{{$contrato->nm_email_contrato}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_contrato" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="ds_contrato" name="ds_contrato">{{$contrato->ds_contrato}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Editar</button>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop