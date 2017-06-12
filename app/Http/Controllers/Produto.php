<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Nome da tabela
    protected $table = 'produto'; 
    
    // Chave primário
    protected $primaryKey = 'cd_produto';

    // Removendo os campos de tempo
    public $timestamps = false;
    
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
