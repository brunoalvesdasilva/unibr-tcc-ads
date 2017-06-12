<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    private $nameFolder = "log";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $log = Log::all();
        
        //
        return view("{$this->nameFolder}/list", ["listaMovimentacoes"=>$log]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    static function store($msg)
    {
        // Adiciona e salva
        $log = new Log();
        $log->nm_titulo = $msg;
        $log->ds_log = $msg;
        $log->dt_log = date('Y-m-d H:i:s');
        $log->cd_usuario = 1;
        $log->save();
        
        // Redireciona
        return true;
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
        $log = Log::find($id);
        
        return view("{$this->nameFolder}/show", ["log"=>$log]);
    }
}
