@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de movimentacao</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/movimentacao/{{$movimentacao->cd_movimentacao}}" class="btn btn-default">Voltar</a>
            <a href="/movimentacao/help" class="btn btn-default">Ajuda</a>
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
        <form class="form-horizontal" action="/movimentacao/{{$movimentacao->cd_movimentacao}}" method="POST">
            <div class="form-group">
                <label for="cd_conta" class="col-md-4 control-label">Conta</label>
                <div class="col-md-6">
                    {{Form::select('cd_conta', $contas, $movimentacao->cd_conta, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="nm_movimentacao" class="col-md-4 control-label">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_movimentacao" name="nm_movimentacao" placeholder="Nome" value="{{$movimentacao->nm_movimentacao}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="ds_movimentacao" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="ds_movimentacao" name="ds_movimentacao">{{$movimentacao->ds_movimentacao}}</textarea>
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