<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    private $nameFolder = "fornecedores";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedores::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaFornecedores"=>$fornecedores]);
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
            'nm_pessoa' => 'required',
            'nm_razao_social' => 'required',
            'cd_cnpj' => 'required',
            'cd_cpf' => 'required',
            'cd_inscricao' => 'required',
            'nm_endereco' => 'required',
            'nm_complemento' => 'required',
            'nm_bairro' => 'required',
            'nm_cidade' => 'required',
            'sg_estado' => 'required',
            'nm_situacao_cadastral' => 'required',
            'nm_tipo_pessoa' => 'required',

        ]);
        
        // Adiciona e salva
        $fornecedores = new Fornecedores();
        $fornecedores->nm_pessoa = $request->nm_pessoa;
        $fornecedores->nm_razao_social = $request->nm_razao_social;
        $fornecedores->cd_cnpj = $request->cd_cnpj;
        $fornecedores->cd_cpf = $request->cd_cpf;
        $fornecedores->cd_inscricao = $request->cd_inscricao;
        $fornecedores->nm_endereco = $request->nm_endereco;
        $fornecedores->nm_complemento = $request->nm_complemento;
        $fornecedores->nm_bairro = $request->nm_bairro;
        $fornecedores->nm_cidade = $request->nm_cidade;
        $fornecedores->sg_estado = $request->sg_estado;
        $fornecedores->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $fornecedores->nm_tipo_pessoa = 'fornecedor';
        $fornecedores->save();
        
        // Redireciona
        return redirect('fornecedores')->with('message', 'Cadastro efetuado com sucesso!');
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
        $fornecedores = Fornecedores::find($id);
        
        return view("{$this->nameFolder}/show", ["fornecedores"=>$fornecedores]);
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
        $fornecedores = Fornecedores::find($id);
        
        return view("{$this->nameFolder}/edit", ["fornecedores"=>$fornecedores]);
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
            'nm_pessoa' => 'required',
            'nm_razao_social' => 'required',
            'cd_cnpj' => 'required',
            'cd_cpf' => 'required',
            'cd_inscricao' => 'required',
            'nm_endereco' => 'required',
            'nm_complemento' => 'required',
            'nm_bairro' => 'required',
            'nm_cidade' => 'required',
            'sg_estado' => 'required',
            'nm_situacao_cadastral' => 'required',
            'nm_tipo_pessoa' => 'required',
            
        ]);
        
        // Adiciona e salva
        $fornecedores = new Fornecedores();
        $fornecedores->nm_pessoa = $request->nm_pessoa;
        $fornecedores->nm_razao_social = $request->nm_razao_social;
        $fornecedores->cd_cnpj = $request->cd_cnpj;
        $fornecedores->cd_cpf = $request->cd_cpf;
        $fornecedores->cd_inscricao = $request->cd_inscricao;
        $fornecedores->nm_endereco = $request->nm_endereco;
        $fornecedores->nm_complemento = $request->nm_complemento;
        $fornecedores->nm_bairro = $request->nm_bairro;
        $fornecedores->nm_cidade = $request->nm_cidade;
        $fornecedores->sg_estado = $request->sg_estado;
        $fornecedores->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $fornecedores->nm_tipo_pessoa = 'fornecedor';
        $fornecedores->save();
        
        // Redireciona
        return redirect("fornecedores/$id")->with('message', 'Cadastro efetuado com sucesso!');
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
        $fornecedores = Fornecedores::find($id);
        $fornecedores->delete();
        
        // Redireciona
        return redirect('fornecedores')->with('message', 'Cadastro excluido com sucesso!');
    }
}
