<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    private $nameFolder = "clientes";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaClientes"=>$clientes]);
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
            

        ]);
        
        // Adiciona e salva
        $clientes = new Clientes();
        $clientes->nm_pessoa = $request->nm_pessoa;
        $clientes->nm_email = $request->nm_email;
        $clientes->nm_senha = $request->nm_senha;
        $clientes->nm_razao_social = $request->nm_razao_social;
        $clientes->cd_cnpj = $request->cd_cnpj;
        $clientes->cd_cpf = $request->cd_cpf;
        $clientes->cd_inscricao = $request->cd_inscricao;
        $clientes->nm_endereco = $request->nm_endereco;
        $clientes->nm_complemento = $request->nm_complemento;
        $clientes->nm_bairro = $request->nm_bairro;
        $clientes->nm_cidade = $request->nm_cidade;
        $clientes->sg_estado = $request->sg_estado;
        $clientes->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $clientes->ic_tipo_pessoa_fisica_juridica = $request->ic_tipo_pessoa_fisica_juridica;
        $clientes->ic_cliente_fornecedor = 'cliente';
        $clientes->save();
        
        // Redireciona
        return redirect('clientes')->with('message', 'Cadastro efetuado com sucesso!');
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
        $clientes = Clientes::find($id);
        
        return view("{$this->nameFolder}/show", ["clientes"=>$clientes]);
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
        $clientes = Clientes::find($id);
        
        return view("{$this->nameFolder}/edit", ["clientes"=>$clientes]);
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
            
            
        ]);
        
        // Adiciona e salva
        $clientes = Clientes::find($id);
        $clientes->nm_pessoa = $request->nm_pessoa;
        $clientes->nm_email = $request->nm_email;
        $clientes->nm_senha = $request->nm_senha;
        $clientes->nm_razao_social = $request->nm_razao_social;
        $clientes->cd_cnpj = $request->cd_cnpj;
        $clientes->cd_cpf = $request->cd_cpf;
        $clientes->cd_inscricao = $request->cd_inscricao;
        $clientes->nm_endereco = $request->nm_endereco;
        $clientes->nm_complemento = $request->nm_complemento;
        $clientes->nm_bairro = $request->nm_bairro;
        $clientes->nm_cidade = $request->nm_cidade;
        $clientes->sg_estado = $request->sg_estado;
        $clientes->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $clientes->ic_tipo_pessoa_fisica_juridica = $request->ic_tipo_pessoa_fisica_juridica;
        $clientes->ic_cliente_fornecedor = 'cliente';
        $clientes->save();
        
        // Redireciona
        return redirect("clientes/$id")->with('message', 'Cadastro efetuado com sucesso!');
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
        $clientes = Clientes::find($id);
        $clientes->delete();
        
        // Redireciona
        return redirect('clientes')->with('message', 'Cadastro excluido com sucesso!');
    }
}