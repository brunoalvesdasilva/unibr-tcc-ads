@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá editar um chamado já cadastrado no sistema.'>
        <h1>Edição do chamado</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/chamado/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
        </div>
    </div>
    
     @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

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
        <form class="form-horizontal" action="/chamado/{{$chamado->cd_chamado}}" method="POST">
            <div class="form-group">
                <label for="cd_usuario_responsavel" class="col-md-4 control-label">Status do chamado</label>
                <div class="col-md-6">
                     {{Form::select('cd_usuario_responsavel', $usuarios, NULL,['class' => 'form-control'])}}
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