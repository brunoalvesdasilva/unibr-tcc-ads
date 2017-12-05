<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // Nome da tabela
    protected $table = 'contato'; 
    
    // Chave primário
    protected $primaryKey = 'cd_contato';

    // Removendo os campos de tempo
    public $timestamps = false;
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_contato',
    ];
}
