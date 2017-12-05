<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    private $nameFolder = "contato";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaContatos"=>$contatos]);
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
            'nm_contato' => 'required',
            'nm_email_contato' => 'required',
            'ds_contato' => 'required',
        ]);
        
        // Adiciona e salva
        $contato = new Contato();
        $contato->nm_contato = $request->nm_contato;
        $contato->nm_email_contato = $request->nm_email_contato;
        $contato->ds_contato = $request->ds_contato;
        $contato->dt_contato = date('Y-m-d H:i:s');
        $contato->save();
        
        // Redireciona
        return redirect('contato')->with('message', 'Contato salvo com sucesso!');
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
        $contato = Contato::find($id);
        
        return view("{$this->nameFolder}/show", ["contato"=>$contato]);
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
        $contato = Contato::find($id);
        
        return view("{$this->nameFolder}/edit", ["contato"=>$contato]);
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
            'nm_contato' => 'required',
            'nm_email_contato' => 'required',
            'ds_contato' => 'required',
        ]);
        
        // Adiciona e salva
        $contato = Contato::find($id);
        $contato->nm_contato = $request->nm_contato;
        $contato->nm_email_contato = $request->nm_email_contato;
        $contato->ds_contato = $request->ds_contato;
        $contato->save();
        
        // Redireciona
        return redirect("contato/$id")->with('message', 'Contato salvo com sucesso!');
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
        $contato = Contato::find($id);
        $contato->delete();
        
        // Redireciona
        return redirect('contato')->with('message', 'Contato salvo com sucesso!');
    }
}
