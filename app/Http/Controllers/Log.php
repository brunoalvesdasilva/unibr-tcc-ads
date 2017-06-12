<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // Nome da tabela
    protected $table = 'log';
    
    // Chave primário
    protected $primaryKey = 'cd_log';

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
