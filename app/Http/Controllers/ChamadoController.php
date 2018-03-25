<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    private $nameFolder = "chamado";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamado = Chamado::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaChamado"=>$chamado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Lista de contratos
        $contratos = array();
        foreach(Contrato::all() as $contrato){
            $contratos[$contrato->cd_contrato] = $contrato->cd_contrato ." ". ucfirst($contrato->ic_tipo_compra_venda);
        }
        
        // Lista de contratos
        $usuarios = array();
        foreach(Usuario::all() as $usuario){
            $usuarios[$usuario->cd_usuario] = $usuario->nm_usuario;
        }
        
        //
        return view("{$this->nameFolder}/create", ['contratos'=>$contratos],['usuarios'=>$usuarios]);
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
        $this->validate($request, 
        [
            'ds_chamado' => 'required',
            'dt_abertura_chamado' => 'required',
            'dt_fechamento_chamado' => 'required',
            'cd_contrato' => 'required',
            'cd_usuario_autor' => 'required',
            'cd_usuario_responsavel' => 'required',

        ]);
        
        // Adiciona e salva
        $chamado = new Chamado();
        $chamado->ds_chamado = $request->ds_chamado;
        $chamado->dt_abertura_chamado = $request->dt_abertura_chamado;
        $chamado->dt_fechamento_chamado = $request->dt_fechamento_chamado;
        $chamado->cd_contrato = $request->cd_contrato;
        $chamado->cd_usuario_autor = $request->cd_usuario_autor;
        $chamado->cd_usuario_responsavel = $request->cd_usuario_responsavel;
        $chamado->save();
        
        // Redireciona
        return redirect('chamado')->with('message', 'Chamado salvo com sucesso!');
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
        $chamado = Chamado::find($id);
        
        return view("{$this->nameFolder}/show", ["chamado"=>$chamado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Chamado
        $chamado = Chamado::find($id);

<<<<<<< HEAD
        // Lista de contratos
        $contratos = array();
        foreach(Contrato::all() as $contrato){
            $contratos[$contrato->cd_contrato] = $contrato->cd_contrato ." ". ucfirst($contrato->ic_tipo_compra_venda);
        }
        
        // Lista de contratos
        $usuarios = array();
        foreach(Usuario::all() as $usuario){
            $usuarios[$usuario->cd_usuario] = $usuario->nm_usuario;
        }
        
        return view("{$this->nameFolder}/edit", ["chamado"=>$chamado, 'contratos'=>$contratos,'usuarios'=>$usuarios]);
=======
        // Lista de chamado
        $contratos = array();
        foreach(Contrato::all() as $contrato){
            $contratos[$contrato->cd_contrato];
        }
        
        return view("{$this->nameFolder}/edit", ["chamado"=>$chamado, 'contratos'=>$contratos]);
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
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
        $this->validate($request, 
        [
            'ds_chamado' => 'required',
            'dt_abertura_chamado' => 'required',
            'dt_fechamento_chamado' => 'required',
            'cd_contrato' => 'required',
            'cd_usuario_autor' => 'required',
            'cd_usuario_responsavel' => 'required',

        ]);
        
        // Adiciona e salva
<<<<<<< HEAD
        $chamado = Chamado::find($id);
=======
        $chamado = new Chamado();
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
        $chamado->ds_chamado = $request->ds_chamado;
        $chamado->dt_abertura_chamado = $request->dt_abertura_chamado;
        $chamado->dt_fechamento_chamado = $request->dt_fechamento_chamado;
        $chamado->cd_contrato = $request->cd_contrato;
        $chamado->cd_usuario_autor = $request->cd_usuario_autor;
        $chamado->cd_usuario_responsavel = $request->cd_usuario_responsavel;
        $chamado->save();
        
        // Redireciona
        return redirect("chamado/$id")->with('message', 'Chamado editado com sucesso!');
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
        $chamado = Chamado::find($id);
        $chamado->delete();
        
        // Redireciona
        return redirect('chamado')->with('message', 'Chamado deletado com sucesso!');
    }
}
