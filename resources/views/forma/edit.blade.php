@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá editar a conta já cadastrada no sistema.'>
        <h1>Edição de forma de pagamento</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/forma/help" class="btn btn-default btn-help">Ajuda</a>
            <a href="/forma/" class="btn btn-default" data-intro='Clique aqui para voltar na listagem de formas de pagamento.'>Listagem</a>
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
                <form class="form-horizontal" action="/forma/{{$formas->cd_forma_pagamento}}" method="POST">
                    <div class="form-group">
                        <label for="nm_forma_pagamento" class="col-md-4 control-label">Forma de Pagamento :</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nm_forma_pagamento" name="nm_forma_pagamento" value="{{$formas->nm_forma_pagamento}}" required/>
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