<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    // Nome da tabela
    protected $table = 'chamado';
    
    // Chave primário
    protected $primaryKey = 'cd_chamado';
    
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
