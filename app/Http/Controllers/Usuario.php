<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Nome da tabela
    protected $table = 'usuario';
    
    // Chave primário
    protected $primaryKey = 'cd_usuario';
    
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
