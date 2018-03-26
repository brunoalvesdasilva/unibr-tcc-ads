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
<<<<<<< HEAD
            'countChamado' => \DB::table('chamado')->count(),
=======
            'countChamado' => 0, //DB::table('users')->count();
>>>>>>> 869f1d7234454476026a5280ea89456cc9fb4291
            'countContratos' => \DB::table('contrato')->count(),
            'countProdutos' => \DB::table('produto')->count(),
            'countUsuarios' => \DB::table('usuario')->count(),
            
            'sumReceitas' => \DB::table('movimentacao')->where('ic_tipo_movimentacao', 'credito')->sum('vl_movimentacao'),
            'sumDespesas' => \DB::table('movimentacao')->where('ic_tipo_movimentacao', 'debito')->sum('vl_movimentacao'),
        );
        
        return view('sistema/home', $infors);
    }
}
