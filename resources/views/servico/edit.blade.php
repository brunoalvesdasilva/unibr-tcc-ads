@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá editar um serviço já cadastrado no sistema.'>
        <h1>Edição do serviço</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/servico/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de serviços.'>Listagem</a>
            <a href="#/serviço/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
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
        <form class="form-horizontal" action="/servico/{{$servico->cd_servico}}" method="POST">
            <div class="form-group">
                <label for="nm_servico" class="col-md-4 control-label">Serviço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_servico" name="nm_servico" placeholder="Nome do serviço" value="{{$servico->nm_servico}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="vl_servico" class="col-md-4 control-label">Valor do Servico :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_servico" name="vl_servico" placeholder="R$ 0,00" data-dinheiro="true" value="{{dinheiro($servico->vl_servico)}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="ds_servico" class="col-md-4 control-label">Descrição do Serviço :</label>
                <div class="col-md-6">
                    <textarea rows="3" class="form-control" id="ds_servico" name="ds_servico" placeholder="Descrição do serviço." required >{{$servico->ds_servico}}</textarea>
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