<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1FormaPagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('forma_pagamento', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_forma_pagamento')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('nm_forma_pagamento', 50)->comment('Nome forma de pagamento');
            
            // Defaults
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('forma_pagamento');
        Schema::enableForeignKeyConstraints();
    }
}
