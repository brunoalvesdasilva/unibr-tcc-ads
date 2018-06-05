<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    // Nome da tabela
    protected $table = 'forma_pagamento';
    
    // Chave primário
    protected $primaryKey = 'cd_forma_pagamento';

    // Removendo os campos de tempo
    public $timestamps = false;
    
    /**
     * Relacionamento hasOne
     * Departamento
     */
    public function forma(){
        return $this->belongsTo('App\Http\Controllers\Forma', 'cd_forma_pagamento', 'cd_forma_pagamento');
    }
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
