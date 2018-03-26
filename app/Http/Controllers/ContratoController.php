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
        $contratos = Contrato::all();
        
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
<<<<<<< HEAD
        // Lista de pessoas
        $pessoas = array();
        foreach(Pessoa::all() as $pessoa){
            $pessoas[$pessoa->cd_pessoa] = $pessoa->nm_pessoa;
        }
        
        //
        return view("{$this->nameFolder}/create", ['pessoas'=>$pessoas]);
=======
        //
        return view("{$this->nameFolder}/create");
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
<<<<<<< HEAD
            'vl_contrato' => 'required',
            'cd_parcela_atual' => 'required',
            'cd_parcela_total' => 'required',
            'ic_tipo_compra_venda' => 'required',
            'cd_pessoa' => 'required',
=======
            'nm_contrato' => 'required',
            'nm_email_contrato' => 'required',
            'ds_contrato' => 'required',
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
        ]);
        
        // Adiciona e salva
        $contrato = new Contrato();
<<<<<<< HEAD
        $contrato->vl_contrato = money2float($request->vl_contrato);
        $contrato->cd_parcela_atual = $request->cd_parcela_atual;
        $contrato->cd_parcela_total = $request->cd_parcela_total;
        $contrato->ic_tipo_compra_venda = $request->ic_tipo_compra_venda;
        $contrato->dt_contrato = date('Y-m-d H:i:s');
        $contrato->cd_pessoa = $request->cd_pessoa;
=======
        $contrato->nm_contrato = $request->nm_contrato;
        $contrato->nm_email_contrato = $request->nm_email_contrato;
        $contrato->ds_contrato = $request->ds_contrato;
        $contrato->dt_contrato = date('Y-m-d H:i:s');
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
<<<<<<< HEAD

        // Lista de pessoas
        $pessoas = array();
        foreach(Pessoa::all() as $pessoa){
            $pessoas[$pessoa->cd_pessoa] = $pessoa->nm_pessoa;
        }
        
        return view("{$this->nameFolder}/edit", ["contrato"=>$contrato , "pessoas"=>$pessoas]);
=======
        
        return view("{$this->nameFolder}/edit", ["contrato"=>$contrato]);
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
<<<<<<< HEAD
            'vl_contrato' => 'required',
            'cd_parcela_atual' => 'required',
            'cd_parcela_total' => 'required',
            'ic_tipo_compra_venda' => 'required',
            'cd_pessoa' => 'required',
=======
            'nm_contrato' => 'required',
            'nm_email_contrato' => 'required',
            'ds_contrato' => 'required',
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
        ]);
        
        // Adiciona e salva
        $contrato = Contrato::find($id);
<<<<<<< HEAD
        $contrato->vl_contrato = money2float($request->vl_contrato);
        $contrato->cd_parcela_atual = $request->cd_parcela_atual;
        $contrato->cd_parcela_total = $request->cd_parcela_total;
        $contrato->ic_tipo_compra_venda = $request->ic_tipo_compra_venda;
        $contrato->cd_pessoa = $request->cd_pessoa;
=======
        $contrato->nm_contrato = $request->nm_contrato;
        $contrato->nm_email_contrato = $request->nm_email_contrato;
        $contrato->ds_contrato = $request->ds_contrato;
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
<<<<<<< HEAD
        return redirect('contrato')->with('message', 'Contrato excluido com sucesso!');
=======
        return redirect('contrato')->with('message', 'Contrato salvo com sucesso!');
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
    }
}
