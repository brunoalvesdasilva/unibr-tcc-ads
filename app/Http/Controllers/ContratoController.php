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
            'nm_contrato' => 'required',
            'nm_email_contrato' => 'required',
            'ds_contrato' => 'required',
        ]);
        
        // Adiciona e salva
        $contrato = new Contrato();
        $contrato->nm_contrato = $request->nm_contrato;
        $contrato->nm_email_contrato = $request->nm_email_contrato;
        $contrato->ds_contrato = $request->ds_contrato;
        $contrato->dt_contrato = date('Y-m-d H:i:s');
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
        
        return view("{$this->nameFolder}/edit", ["contrato"=>$contrato]);
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
            'nm_contrato' => 'required',
            'nm_email_contrato' => 'required',
            'ds_contrato' => 'required',
        ]);
        
        // Adiciona e salva
        $contrato = Contrato::find($id);
        $contrato->nm_contrato = $request->nm_contrato;
        $contrato->nm_email_contrato = $request->nm_email_contrato;
        $contrato->ds_contrato = $request->ds_contrato;
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
        return redirect('contrato')->with('message', 'Contrato salvo com sucesso!');
    }
}
