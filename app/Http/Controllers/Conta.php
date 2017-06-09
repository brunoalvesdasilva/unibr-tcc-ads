<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    // Nome da tabela
    protected $table = 'conta';
    
    // Chave primário
    protected $primaryKey = 'cd_conta';

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
