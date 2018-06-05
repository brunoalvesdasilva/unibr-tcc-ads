 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private $nameFolder = "pessoa";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa = Pessoa::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaPessoa"=>$pessoa]);
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
        $pessoa = new Pessoa();
        $pessoa->nm_pessoa = $request->nm_pessoa;
        $pessoa->nm_razao_social = $request->nm_razao_social;
        $pessoa->cd_cnpj = $request->cd_cnpj;
        $pessoa->cd_cpf = $request->cd_cpf;
        $pessoa->cd_inscricao = $request->cd_inscricao;
        $pessoa->nm_endereco = $request->nm_endereco;
        $pessoa->nm_complemento = $request->nm_complemento;
        $pessoa->nm_bairro = $request->nm_bairro;
        $pessoa->nm_cidade = $request->nm_cidade;
        $pessoa->sg_estado = $request->sg_estado;
        $pessoa->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $pessoa->nm_tipo_pessoa = $request->nm_tipo_pessoa;
        $pessoa->save();
        
        // Redireciona
        return redirect('pessoa')->with('message', 'Cadastro efetuado com sucesso!');
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
        $pessoa = Pessoa::find($id);
        
        return view("{$this->nameFolder}/show", ["pessoa"=>$pessoa]);
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
        $pessoa = Pessoa::find($id);
        
        return view("{$this->nameFolder}/edit", ["pessoa"=>$pessoa]);
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
        $pessoa = new Pessoa();
        $pessoa->nm_pessoa = $request->nm_pessoa;
        $pessoa->nm_razao_social = $request->nm_razao_social;
        $pessoa->cd_cnpj = $request->cd_cnpj;
        $pessoa->cd_cpf = $request->cd_cpf;
        $pessoa->cd_inscricao = $request->cd_inscricao;
        $pessoa->nm_endereco = $request->nm_endereco;
        $pessoa->nm_complemento = $request->nm_complemento;
        $pessoa->nm_bairro = $request->nm_bairro;
        $pessoa->nm_cidade = $request->nm_cidade;
        $pessoa->sg_estado = $request->sg_estado;
        $pessoa->nm_situacao_cadastral = $request->nm_situacao_cadastral;
        $pessoa->nm_tipo_pessoa = $request->nm_tipo_pessoa;
        $pessoa->save();
        
        // Redireciona
        return redirect("pessoa/$id")->with('message', 'Cadastro efetuado com sucesso!');
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
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        
        // Redireciona
        return redirect('pessoa')->with('message', 'Cadastro excluido com sucesso!');
    }
}
