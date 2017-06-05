<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    // Nome da tabela
    protected $table = 'contrato';
    
    // Chave primário
    protected $primaryKey = 'cd_contrato';
    
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
