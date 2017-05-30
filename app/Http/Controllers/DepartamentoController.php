<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    private $nameFolder = "departamento";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamento = Departamento::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaDepartamentos"=>$departamento]);
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
            'nm_departamento' => 'required'

        ]);
        
        // Adiciona e salva
        $departamento = new Departamento();
        $departamento->nm_departamento = $request->nm_departamento;
        $departamento->save();
        
        // Redireciona
        return redirect('departamento')->with('message', 'Departamento salvo com sucesso!');
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
        $departamento = Departamento::find($id);
        
        return view("{$this->nameFolder}/show", ["departamento"=>$departamento]);
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
        $departamento = Departamento::find($id);
        
        return view("{$this->nameFolder}/edit", ["departamento"=>$departamento]);
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
            'nm_departamento' => 'required'

        ]);
        
        // Adiciona e salva
        $departamento = Departamento::find($id);
        $departamento->nm_departamento = $request->nm_departamento;
        $departamento->save();
        
        // Redireciona
        return redirect("departamento/$id")->with('message', 'Departamento salvo com sucesso!');
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
        $departamento = Departamento::find($id);
        $departamento->delete();
        
        // Redireciona
        return redirect('departamento')->with('message', 'Departamento salvo com sucesso!');
    }
}
