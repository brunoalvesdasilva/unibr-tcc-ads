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
        $contratos = Contrato::orderBy('cd_contrato', 'desc')->get();
        
        //
        return view("{$this->nameFolder}/list", ["listaContratos"=>$contratos]);
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
}