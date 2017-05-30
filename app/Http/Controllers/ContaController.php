<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    private $nameFolder = "conta";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = Conta::all();

        //
        return view("{$this->nameFolder}/list", ["listaContas"=>$contas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("{$this->nameFolder}/create");
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
            'nm_conta' => 'required',
            'cd_agencia_conta' => 'required',
            'cd_numero_conta' => 'required',
            'vl_inicial_conta' => 'required',
            'nm_tipo_conta' => 'required',
        ]);

        // Adiciona e salva
        $contas = new Conta();
        $contas->nm_conta = $request->nm_conta;
        $contas->cd_agencia_conta = $request->cd_agencia_conta;
        $contas->cd_numero_conta = $request->cd_numero_conta;
        $contas->vl_inicial_conta = $request->vl_inicial_conta;
        $contas->vl_atual_conta = $request->vl_inicial_conta;
        $contas->nm_tipo_conta = $request->nm_tipo_conta;
        $contas->dt_registro_conta = date('Y-m-d H:i:s');
        $contas->save();

        // Redireciona
        return redirect('conta')->with('message', 'Conta criada com sucesso!');
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
        $conta = Conta::find($id);

        return view("{$this->nameFolder}/show", ["conta"=>$conta]);
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
        $conta = Conta::find($id);

        return view("{$this->nameFolder}/edit", ["conta"=>$conta]);
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
            'nm_conta' => 'required',
            'cd_agencia_conta' => 'required',
            'cd_numero_conta' => 'required',
            'vl_inicial_conta' => 'required',
        ]);

        // Adiciona e salva
        $contas = Conta::find($id);
        $contas->nm_conta = $request->nm_conta;
        $contas->cd_agencia_conta = $request->cd_agencia_conta;
        $contas->cd_numero_conta = $request->cd_numero_conta;
        $contas->vl_inicial_conta = $request->vl_inicial_conta;
        $contas->save();

        // Redireciona
        return redirect("conta/$id")->with('message', 'Conta salva com sucesso!');
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
        $conta = Conta::find($id);
        $conta->delete();

        // Redireciona
        return redirect('conta')->with('message', 'Conta deletada com sucesso!');
    }
}
