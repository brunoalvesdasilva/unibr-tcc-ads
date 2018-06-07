<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormaController extends Controller
{
    private $nameFolder = "forma";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formas = Forma::all();

        //
        return view("{$this->nameFolder}/list", ["listaFormas"=>$formas]);
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
            'nm_forma_pagamento' => 'required',
        ]);

        // Adiciona e salva
        $formas = new Forma();
        $formas->nm_forma_pagamento = $request->nm_forma_pagamento;
        $formas->save();

        // Redireciona
        return redirect('forma')->with('message', 'Forma de pagamento criada com sucesso!');
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
        $formas = Forma::find($id);

        return view("{$this->nameFolder}/show", ["formas"=>$formas]);
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
        $formas = Forma::find($id);

        return view("{$this->nameFolder}/edit", ["formas"=>$formas]);
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
            'nm_forma_pagamento' => 'required',
        ]);

        // Adiciona e salva
        $formas = Forma::find($id);
        $formas->nm_forma_pagamento = $request->nm_forma_pagamento;
        $formas->save();

        // Redireciona
        return redirect("forma/$id")->with('message', 'Forma de pagamento alterada com sucesso!');
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
        $formas = Forma::find($id);
        $formas->delete();

        // Redireciona
        return redirect('forma')->with('message', 'Forma de pagamento apagada com sucesso!');
    }
}