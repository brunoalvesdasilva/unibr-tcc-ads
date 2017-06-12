<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    // Nome da tabela
    protected $table = 'departamento';
    
    // Chave primário
    protected $primaryKey = 'cd_departamento';

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
