@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Edição de conta</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/usuario/help" class="btn btn-default">Ajuda</a>
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
                <form class="form-horizontal" action="/conta/{{$conta->cd_conta}}" method="POST">
                    <div class="form-group">
                        <label for="nm_conta" class="col-md-4 control-label">Nome :</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nm_conta" name="nm_conta" placeholder="Nome da conta" value="{{$conta->nm_conta}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cd_agencia_conta" class="col-md-4 control-label">Agência :</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="cd_agencia_conta" name="cd_agencia_conta" placeholder="Nº da agência" value="{{$conta->cd_agencia_conta}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cd_numero_conta" class="col-md-4 control-label">Conta :</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="cd_numero_conta" name="cd_numero_conta" placeholder="Nº da conta" value="{{$conta->cd_numero_conta}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vl_inicial_conta" class="col-md-4 control-label">Valor Inicial:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="vl_inicial_conta" name="vl_inicial_conta" placeholder="Valor inicial R$" value="{{$conta->vl_inicial_conta}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ic_tipo_conta" class="col-md-4 control-label">Tipo de conta :</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="nm_tipo_conta0" name="nm_tipo_conta" value="poupanca" {{$conta->nm_tipo_conta=="poupanca"?"checked":""}}> Poupança
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="nm_tipo_conta1" name="nm_tipo_conta" value="corrente" {{$conta->nm_tipo_conta=="corrente"?"checked":""}}> Corrente
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="nm_tipo_conta2" name="nm_tipo_conta" value="cartao" {{$conta->nm_tipo_conta=="cartao"?"checked":""}}> Cartão
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="nm_tipo_conta3" name="nm_tipo_conta" value="investimento" {{$conta->nm_tipo_conta=="investimento"?"checked":""}}> Investimento
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="nm_tipo_conta4" name="nm_tipo_conta" value="caixa" {{$conta->nm_tipo_conta=="caixa"?"checked":""}}> Caixa
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio"  id="nm_tipo_conta5" name="nm_tipo_conta" value="outras" {{$conta->nm_tipo_conta=="outras"?"checked":""}}> Outras
                                </label>
                            </div>
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