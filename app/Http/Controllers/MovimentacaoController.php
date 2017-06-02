<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    private $nameFolder = "movimentacao";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentacao = Movimentacao::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaMovimentacoes"=>$movimentacao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Lista de contas
        $contas = Conta::all();
        
        //
        return view("{$this->nameFolder}/create", ['contas'=>$contas]);
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
            'nm_movimentacao' => 'required'

        ]);
        
        // Adiciona e salva
        $movimentacao = new Movimentacao();
        $movimentacao->nm_movimentacao = $request->nm_movimentacao;
        $movimentacao->save();
        
        // Redireciona
        return redirect('movimentacao')->with('message', 'Movimentacao salva com sucesso!');
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
        $movimentacao = Movimentacao::find($id);
        
        return view("{$this->nameFolder}/show", ["movimentacao"=>$movimentacao]);
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
        $movimentacao = Movimentacao::find($id);
        
        return view("{$this->nameFolder}/edit", ["movimentacao"=>$movimentacao]);
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
            'nm_movimentacao' => 'required'
        ]);
        
        // Adiciona e salva
        $movimentacao = Movimentacao::find($id);
        $movimentacao->nm_movimentacao = $request->nm_movimentacao;
        $movimentacao->save();
        
        // Redireciona
        return redirect("movimentacao/$id")->with('message', 'Movimentacao editado com sucesso!');
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
        $movimentacao = Movimentacao::find($id);
        $movimentacao->delete();
        
        // Redireciona
        return redirect('movimentacao')->with('message', 'Movimentacao deletado com sucesso!');
    }
}
