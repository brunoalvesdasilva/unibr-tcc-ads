@extends('layout/private')
@section('content-private')

<div class="text-center">
    <h2 class="pb-4 text-secondary">Abaixo estão a lista dos seus orçamentos!</h2>
</div>

<div class="col-md-12">

    <div class="p-4">
        <a href="/orcamento/cadastrar" class="btn btn-primary btn-block">
            <span class="d-none d-lg-block d-xl-block">Clique aqui para abrir um novo orçamento</span>
            <span class="btn-block d-block d-sm-none">Novo orçamento</span>
        </a>
    </div>

    <div id="accordion" class="accordion">

        @forelse($listaContratos as $indice => $contrato)
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse{{$contrato->cd_contrato}}">
                <strong>
                    #{{$contrato->cd_contrato}} - Itens: {{$contrato->qt_itens_contrato}} - 
                    @if($contrato->ic_situacao_aprovado_reprovado=="aguardando")
                        Aguardando aprovação
                    @else
                        {{ucfirst($contrato->ic_situacao_aprovado_reprovado)}}
                    @endif
                    - Valor: R$ {{dinheiro($contrato->vl_contrato)}} 
                </strong> 
                
                @if($contrato->ic_situacao_aprovado_reprovado=="aguardando")
                    <span class="badge badge-pill badge-warning float-right">
                    Aberto em {{$contrato->dt_contrato->format('d/m/Y')}}
                    </span>
                @endif

                @if($contrato->ic_situacao_aprovado_reprovado=="reprovado")
                    <span class="badge badge-pill badge-danger float-right">
                    Aberto em {{$contrato->dt_contrato->format('d/m/Y')}}
                    </span>
                @endif

                @if($contrato->ic_situacao_aprovado_reprovado=="aprovado")
                    <span class="badge badge-pill badge-success float-right">
                    Aberto em {{$contrato->dt_contrato->format('d/m/Y')}}
                    </span>
                @endif
            </div>
            <div id="collapse{{$contrato->cd_contrato}}" class="collapse {{!$indice?'show':''}}" data-parent="#accordion">
                <div class="card-body">
                    
                    <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Produto</th>
                            <th>Unitário</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contrato->produtos as $indice => $item)
                        <tr>
                            <td>{{$indice+1}}</td>
                            <td>{{$item->produto->nm_produto}}</td>
                            <td>{{dinheiro($item->vl_produto)}}</td>
                            <td>{{$item->qt_produto}}</td>
                            <td>{{$parcial = dinheiro($item->vl_produto*$item->qt_produto)}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Nenhum produto vinculado ao orçamento</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td>{{dinheiro($contrato->vl_contrato)}}</td>
                        </tr>
                    </tfooter>
                    </table>
                    </div>

                    
                    @if($contrato->ic_situacao_aprovado_reprovado=="aprovado")
                    <form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
                        <!-- Campos obrigatórios -->  
                        <input name="receiverEmail" value="suporte@lojamodelo.com.br" type="hidden">  
                        <input name="currency" value="BRL" type="hidden">  
                
                        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
                        <input name="itemId1" value="0001" type="hidden">  
                        <input name="itemDescription1" value="Pagamento pelo contrato #{{$contrato->cd_contrato}} - Itens: {{$contrato->qt_itens_contrato}}" type="hidden">  
                        <input name="itemAmount1" value="{{money2float($contrato->vl_contrato)}}" type="hidden">  
                        <input name="itemQuantity1" value="1" type="hidden">  
                        <input name="itemWeight1" value="1000" type="hidden">  
                        
                        <!-- Código de referência do pagamento no seu sistema (opcional) -->  
                        <input name="reference" value="REF{{$contrato->cd_contrato}}" type="hidden">  
                
                        <!-- Dados do comprador (opcionais) -->  
                        <input name="senderName" value="{{Session::get('client_name')}}" type="hidden">  
                        <input name="senderEmail" value="{{Session::get('client_email')}}" type="hidden">  
                
                        <!-- submit do form (obrigatório) -->  
                        <button type="submit" class="btn btn-success btn-block">
                            Pagar contrato com o pagseguro
                        </button>
                    </form>  
                    
                    @endif

                </div>
            </div>
        </div>
        @empty
        <p class="text-center p-4">
            Você não tem nenhum orçamento para consulta
        </p>
        @endforelse

    </div>
            
</div>

<style>
.accordion .card-header{
    cursor: pointer;
}
</style>

@stop