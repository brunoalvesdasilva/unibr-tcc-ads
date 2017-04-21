<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_conta');
            $table->string('nm_conta', 50);
			$table->float('vl_inicial_conta', 8,2);
			$table->float('vl_atual_conta', 8,2);
			$table->datetime('dt_registro_conta');
			$table->enum('nm_tipo_conta',['corrente','caixa','poupanca','cartao','investimento','outras']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conta');
    }
}
