<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Conta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('conta', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_conta')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('nm_conta', 50)->comment('Nome da Conta');
            $table->integer('cd_agencia_conta')->comment('Numero da agencia da conta');
            $table->integer('cd_numero_conta')->comment('Numero da conta');
            $table->float('vl_inicial_conta', 8,2)->comment('Valor inicial da conta, Obs: representa o quanto aquela conta já possui');
            $table->float('vl_atual_conta', 8,2)->comment('Valor atual da conta, Obs:representa o valor alterado referente as movimentações');
            $table->datetime('dt_registro_conta')->comment('Data do registro da conta, representa a data que se esta cadastrando a conta');
            $table->enum('nm_tipo_conta',['corrente','caixa','poupanca','cartao','investimento','outras'])->comment('Tipo da conta');
            
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
        Schema::dropIfExists('conta');
        Schema::enableForeignKeyConstraints();
    }
}
