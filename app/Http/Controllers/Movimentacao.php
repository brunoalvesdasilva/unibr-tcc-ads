<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    // Nome da tabela
    protected $table = 'movimentacao';
    
    // Chave primário
    protected $primaryKey = 'cd_movimentacao';

    // Removendo os campos de tempo
    public $timestamps = false;
    
    /**
     * Relacionamento hasOne
     * Conta
     */
    public function conta(){
        return $this->belongsTo('App\Http\Controllers\Conta', 'cd_conta', 'cd_conta');
    }
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_movimentacao',
        'dt_registro_movimentacao',
    ];
}
