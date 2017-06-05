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
                <label for="nm_movimentacao" class="col-md-4 control-label">Movimentação</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="nm_movimentacao" placeholder="Nome" required value="{{$movimentacao->nm_movimentacao}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_tipo_movimentacao" class="col-md-4 control-label">Tipo</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_movimentacao" value="credito" required {{checkSe('credito', $movimentacao->ic_tipo_movimentacao)}} /> Receita
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_movimentacao" value="debito" required {{checkSe('debito', $movimentacao->ic_tipo_movimentacao)}} /> Despesa
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_conta" class="col-md-4 control-label">Conta</label>
                <div class="col-md-6">
                    {{Form::select('cd_conta', $contas, $movimentacao->cd_conta, ['class' => 'form-control', 'required'=>'required'])}}
                </div>
            </div>
            <div class="form-group">
                <label for="dt_movimentacao" class="col-md-4 control-label">Data</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="dt_movimentacao" value="{{$movimentacao->dt_movimentacao->format('d/m/Y')}}" required data-calendario="true" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_nf_movimentacao" class="col-md-4 control-label">Cód. Nota Fiscal</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="cd_nf_movimentacao" value="{{$movimentacao->cd_nf_movimentacao}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_pago_sim_nao" class="col-md-4 control-label">Situação da movimentação</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_pago_sim_nao" value="sim" required {{checkSe('sim', $movimentacao->ic_pago_sim_nao)}} /> Pago
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_pago_sim_nao" value="nao" required {{checkSe('nao', $movimentacao->ic_pago_sim_nao)}} /> Não pago
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="vl_movimentacao" class="col-md-4 control-label">Valor movimentação</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="vl_movimentacao" value="{{dinheiro($movimentacao->vl_movimentacao)}}" required data-dinheiro="true"  />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_movimentacao" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-6">
                    <textarea class="form-control"  name="ds_movimentacao">{{$movimentacao->ds_movimentacao}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="ic_recorrente_sim_nao" class="col-md-4 control-label">Movimentação recorrente</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_recorrente_sim_nao" value="sim" required {{checkSe('sim', $movimentacao->ic_recorrente_sim_nao)}} /> Sim
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_recorrente_sim_nao" value="nao" required {{checkSe('nao', $movimentacao->ic_recorrente_sim_nao)}} /> Não
                    </label>
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