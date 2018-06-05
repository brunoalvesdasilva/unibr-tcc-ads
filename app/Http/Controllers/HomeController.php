<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostra a página de login do sistema
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $infors = array(
            'countChamado' => \DB::table('chamado')->count(),
            'countContratos' => \DB::table('contrato')->count(),
            'countProdutos' => \DB::table('produto')->count(),
            'countUsuarios' => \DB::table('usuario')->count(),
            
            'sumReceitas' => \DB::table('movimentacao')->where('ic_tipo_movimentacao', 'credito')->sum('vl_movimentacao'),
            'sumDespesas' => \DB::table('movimentacao')->where('ic_tipo_movimentacao', 'debito')->sum('vl_movimentacao'),
            'sumAbertos' => \DB::table('chamado')->where('ic_chamado_aberto_fechado', 'aberto')->count(),
            'sumFechados' => \DB::table('chamado')->where('ic_chamado_aberto_fechado', 'fechado')->count(),
        );
        
        return view('sistema/home', $infors);
    }
}
