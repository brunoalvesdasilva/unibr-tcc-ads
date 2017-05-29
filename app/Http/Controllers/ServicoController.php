<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    private $nameFolder = "servico";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servico = Servico::all();

        //
        return view("{$this->nameFolder}/list", ["listaServico"=>$servico]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'nm_servico' => 'required',
            'ds_servico' => 'required',
            'vl_servico' => 'required',
        ]);

        // Adiciona e salva
        $servico = new Servico();
        $servico->nm_servico = $request->nm_servico;
        $servico->ds_servico = $request->ds_servico;
        $servico->vl_servico = $request->vl_servico;
        $servico->save();

        return redirect('servico')->with('message', 'Serviço salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $servico = Servico::find($id);

        return view("{$this->nameFolder}/show", ["servico"=>$servico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servico = Servico::find($id);

        return view("{$this->nameFolder}/edit", ["servico"=>$servico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nm_servico' => 'required',
            'ds_servico' => 'required',
            'vl_servico' => 'required',
        ]);

        // Adiciona e salva
        $servico = new Servico();
        $servico->nm_servico = $request->nm_servico;
        $servico->ds_servico = $request->ds_servico;
        $servico->vl_servico = $request->vl_servico;
        $servico->save();

        // Redireciona
        return redirect("servico/$id")->with('message', 'Serviço salvo com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Adiciona e salva
        $servico = Servico::find($id);
        $servico->delete();

        // Redireciona
        return redirect('servico')->with('message', 'Serviço salvo com sucesso!');
    }
}
