<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $nameFolder = "usuario";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaUsuario"=>$usuario]);
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
        $this->validate($request, 
		[
            'nm_usuario' => 'required',
			'nm_email' => 'required',
			'nm_senha' => 'required',
			'cd_departamento' => 'required',

        ]);
        
        // Adiciona e salva
        $usuario = new Usuario();
        $usuario->nm_usuario = $request->nm_usuario;
        $usuario->nm_email = $request->nm_email;
		$usuario->nm_senha = $request->nm_senha;
		$usuario->cd_departamento = $request->cd_departamento;
		$usuario->save();
        
        // Redireciona
        return redirect('usuario')->with('message', 'Usuario salvo com sucesso!');
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
        $usuario = Usuario::find($id);
        
        return view("{$this->nameFolder}/show", ["usuario"=>$usuario]);
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
        $usuario = Usuario::find($id);
        
        return view("{$this->nameFolder}/edit", ["usuario"=>$usuario]);
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
			'nm_usuario' => 'required'
			//'nm_email' => 'required'
			//'nm_senha' => 'required'
			//'cd_departamento' => 'required'

        ]);
        
        // Adiciona e salva
        $usuario = Usuario::find($id);
        $usuario->nm_usuario = $request->nm_usuario;
		$usuario->nm_email = $request->nm_email;
		$usuario->nm_senha = $request->nm_senha;
		$usuario->cd_departamento = $request->cd_departamento;
        $usuario->save();
        
        // Redireciona
        return redirect("usuario/$id")->with('message', 'Usuario salvo com sucesso!');
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
        $usuario = Usuario::find($id);
        $usuario->delete();
        
        // Redireciona
        return redirect('usuario')->with('message', 'Usuario salvo com sucesso!');
    }
}
