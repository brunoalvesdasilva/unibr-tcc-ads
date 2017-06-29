<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $nameFolder = "produto";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaProdutos"=>$produtos]);
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
            'nm_produto' => 'required',
            'ds_produto' => 'required',
            'vl_produto' => 'required',
            'im_produto' => 'required',
            'qt_minima_produto' => 'required',
            'qt_maxima_produto' => 'required',
            'qt_estoque_produto' => 'required',
        ]);
        
        // Adiciona e salva
        $produto = new Produto();
        $produto->nm_produto = $request->nm_produto;
        $produto->ds_produto = $request->ds_produto;
        $produto->vl_produto = money2float($request->vl_produto);
        $produto->im_produto = $request->im_produto;
        $produto->qt_minima_produto = $request->qt_minima_produto;
        $produto->qt_maxima_produto = $request->qt_maxima_produto;
        $produto->qt_estoque_produto = $request->qt_estoque_produto;
        $produto->save();
        
        // Redireciona
        return redirect('produto')->with('message', 'Produto salvo com sucesso!');
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
        $produto = Produto::find($id);
        
        return view("{$this->nameFolder}/show", ["produto"=>$produto]);
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
        $produto = Produto::find($id);
        
        return view("{$this->nameFolder}/edit", ["produto"=>$produto]);
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
            'nm_produto' => 'required',
            'ds_produto' => 'required',
            'vl_produto' => 'required',
            'im_produto' => 'required',
            'qt_minima_produto' => 'required',
            'qt_maxima_produto' => 'required',
            'qt_estoque_produto' => 'required',
        ]);
        
        // Adiciona e salva
        $produto = Produto::find($id);
        $produto->nm_produto = $request->nm_produto;
        $produto->ds_produto = $request->ds_produto;
        $produto->vl_produto = money2float($request->vl_produto);
        $produto->im_produto = $request->im_produto;
        $produto->qt_minima_produto = $request->qt_minima_produto;
        $produto->qt_maxima_produto = $request->qt_maxima_produto;
        $produto->qt_estoque_produto = $request->qt_estoque_produto;
        $produto->save();
        
        // Redireciona
        return redirect("produto/$id")->with('message', 'Produto salvo com sucesso!');
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
        $produto = Produto::find($id);
        $produto->delete();
        
        // Redireciona
        return redirect('produto')->with('message', 'Produto salvo com sucesso!');
    }
}
