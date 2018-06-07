<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class ContratoProduto extends Model
{
    // Nome da tabela
    protected $table = 'contrato_produto';
    
    // Chave primário
    protected $primaryKey = 'cd_contrato';

    // Removendo os campos de tempo
    public $timestamps = false;
    
    /**
     * Relacionamento hasOne
     * Produto
     */
    public function produto(){
        return $this->belongsTo('App\Http\Controllers\Produto', 'cd_produto', 'cd_produto');
    }
    
    /**
     * Relacionamento hasOne
     * Contrato
     */
    public function contrato(){
        return $this->belongsTo('App\Http\Controllers\Produto', 'cd_produto', 'cd_produto');
    }
}
