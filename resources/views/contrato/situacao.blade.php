@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>{{$situacao=="aprovacao"?"Aprovar":"Reprovar"}} cotação do cliente</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/contrato/{{$contrato->cd_contrato}}" class="btn btn-default">Voltar</a>
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
        <form class="form-horizontal" action="/contrato/{{$contrato->cd_contrato}}/situacao" method="POST">
            
            <div class="form-group">
                <label for="ic_situacao_aprovado_reprovado" class="col-md-4 control-label">Ação a ser aplicada</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ic_situacao_aprovado_reprovado" value="{{$situacao=="aprovacao"?"Aprovar":"Reprovar"}}" required readonly  />
                </div>
            </div>

            <div class="form-group">
                <label for="vl_contrato" class="col-md-4 control-label">Valor da cotação</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="vl_contrato" value="{{dinheiro($contrato->vl_contrato)}}" required data-dinheiro="true" readonly  />
                </div>
            </div>

            @if($situacao=="aprovacao")
            <!--div class="form-group">
                <label for="vl_desconto" class="col-md-4 control-label">Aplicar desconto (%)</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="vl_desconto" value="" data-dinheiro="true"  />
                </div>
            </div-->
            @endif
            
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn {{$situacao=="aprovacao"?"btn-success":"btn-danger"}}">
                        Confirmar {{$situacao=="aprovacao"?"aprovação":"reprovação"}}
                    </button>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop