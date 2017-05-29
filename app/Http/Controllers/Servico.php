<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    // Nome da tabela
    protected $table = 'servico';
    
    // Chave primário
    protected $primaryKey = 'cd_servico';
    
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
