<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratoController extends Controller
{
    private $nameFolder = "contrato";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::orderBy('cd_contrato', 'desc');

        // Caso haja filtros
        if (isset($_GET['filtro']) && $filtro = \filter_var($_GET['filtro'], FILTER_DEFAULT)) {
            if (!empty($filtro)) {
                $contratos = $contratos->where('ic_situacao_aprovado_reprovado','=', \strtolower($filtro));
            }
        }
        
        //
        return view("{$this->nameFolder}/list", ["listaContratos"=>$contratos->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Lista de pessoas
        $pessoas = array();
        foreach(Pessoa::all() as $pessoa){
            $pessoas[$pessoa->cd_pessoa] = $pessoa->nm_pessoa;
        }
        
        // Lista de pagamento
        $formas = array();
        foreach(Forma::all() as $forma_pagamento){
            $formas[$forma_pagamento->cd_forma_pagamento] = $forma_pagamento->nm_forma_pagamento;
        }

        //
        return view("{$this->nameFolder}/create", ['pessoas'=>$pessoas , 'formas'=>$formas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida
        $this->validate($request, [
            'vl_contrato' => 'required',
            'cd_parcela_atual' => 'required',
            'cd_parcela_total' => 'required',
            'ic_tipo_compra_venda' => 'required',
            'cd_pessoa' => 'required',
        ]);
        
        // Adiciona e salva
        $contrato = new Contrato();
        $contrato->vl_contrato = money2float($request->vl_contrato);
        $contrato->cd_parcela_atual = $request->cd_parcela_atual;
        $contrato->cd_parcela_total = $request->cd_parcela_total;
        $contrato->ic_tipo_compra_venda = $request->ic_tipo_compra_venda;
        $contrato->qt_itens_contrato = $request->qt_itens_contrato;
        $contrato->dt_contrato = date('Y-m-d H:i:s');
        $contrato->cd_pessoa = $request->cd_pessoa;
        $contrato->cd_forma_pagamento = $request->cd_forma_pagamento;
        $contrato->save();
        
        // Redireciona
        return redirect('contrato')->with('message', 'Contrato salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contrato = Contrato::find($id);
        
        return view("{$this->nameFolder}/show", ["contrato"=>$contrato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contrato = Contrato::find($id);

        // Lista de pessoas
        $pessoas = array();
        foreach(Pessoa::all() as $pessoa){
            $pessoas[$pessoa->cd_pessoa] = $pessoa->nm_pessoa;
        }
        
        return view("{$this->nameFolder}/edit", ["contrato"=>$contrato , "pessoas"=>$pessoas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valida
        $this->validate($request, [
            'vl_contrato' => 'required',
            'cd_parcela_atual' => 'required',
            'cd_parcela_total' => 'required',
            'ic_tipo_compra_venda' => 'required',
            'cd_pessoa' => 'required',
        ]);
        
        // Adiciona e salva
        $contrato = Contrato::find($id);
        $contrato->vl_contrato = money2float($request->vl_contrato);
        $contrato->cd_parcela_atual = $request->cd_parcela_atual;
        $contrato->cd_parcela_total = $request->cd_parcela_total;
        $contrato->ic_tipo_compra_venda = $request->ic_tipo_compra_venda;
        $contrato->cd_pessoa = $request->cd_pessoa;
        $contrato->save();
        
        // Redireciona
        return redirect("contrato/$id")->with('message', 'Contrato salvo com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Adiciona e salva
        $contrato = Contrato::find($id);
        $contrato->delete();
        
        // Redireciona
        return redirect('contrato')->with('message', 'Contrato excluido com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function situacao($id, $situacao)
    {
        // Resultado
        $contrato = Contrato::find($id);
        $situacao = \filter_var($situacao, FILTER_DEFAULT);

        return view("{$this->nameFolder}/situacao", ["contrato"=>$contrato, "situacao"=>$situacao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function situacaoUpdate(Request $request, $id)
    {
        // Valida
        $this->validate($request, [
            'vl_contrato' => 'required',
        ]);
        
        // Adiciona e salva
        $contrato = Contrato::find($id);
        $contrato->ic_situacao_aprovado_reprovado = 'reprovado';

        // Situação
        $situacao = "reprovada";

        if ($request->ic_situacao_aprovado_reprovado == 'Aprovar') {
            $contrato->ic_situacao_aprovado_reprovado = 'aprovado';
            #$contrato->vl_desconto = money2float($request->vl_desconto);

            // Situação
            $situacao = "aprovada";

            // Adiciona e salva
            $movimentacao = new Movimentacao();
            $movimentacao->nm_movimentacao = "Contrato #{$id} - Recebimento aprovado";
            $movimentacao->ic_tipo_movimentacao = "credito";
            $movimentacao->cd_conta = 1;
            $movimentacao->dt_movimentacao = date('Y-m-d');
            $movimentacao->cd_nf_movimentacao = $id;
            $movimentacao->ic_pago_sim_nao = "nao";
            $movimentacao->vl_movimentacao = money2float($contrato->vl_contrato);
            $movimentacao->ds_movimentacao = "Cotação aprovada na data de hoje pelo valor de ".dinheiro($contrato->vl_contrato);
            $movimentacao->ic_recorrente_sim_nao = "nao";
            $movimentacao->dt_registro_movimentacao = date('Y-m-d H:i:s');
            $movimentacao->save();
        }
        
        $contrato->save();
        
        // Redireciona
        return redirect("contrato/$id")->with('message', "Cotação {$situacao} com sucesso!");
    }
}