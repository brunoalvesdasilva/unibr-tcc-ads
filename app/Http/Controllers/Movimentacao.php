<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    // Nome da tabela
    protected $table = 'movimentacao';
    
    // Chave primário
    protected $primaryKey = 'cd_movimentacao';
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
