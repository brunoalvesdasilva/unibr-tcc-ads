<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    /**
     * Mostra a página de login do sistema
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('sistema/logon');
    }
    
    /**
     * Valida se um usuário existe no banco de dados
     * e loga ele no sistema
     * @return \Illuminate\Http\Response
     */
    public function logon(Request $request)
    {
        $user = Usuario::where('nm_email', $request->nm_email)
                        ->where('nm_senha', $request->nm_senha)
                        ->first();
        
        // Tem um usuário cadastrado
        if ($user) {
            $request->session()->put('user_on', $user->cd_usuario);
            $request->session()->put('user_name', $user->nm_usuario);
            $request->session()->put('user_email', $user->nm_email);
            return redirect('/home')->with('message', 'Usuário logado com sucesso!');
        }

        return back()->with('message', 'Usuário ou senha inválidos');
    }
    
    /**
     * Desloga o usuário do sistema
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->put('user_on', 0);
        $request->session()->forget('user_on');
        
        return redirect('/?3')->with('message', 'Usuário deslogado com sucesso!');
    }
}
