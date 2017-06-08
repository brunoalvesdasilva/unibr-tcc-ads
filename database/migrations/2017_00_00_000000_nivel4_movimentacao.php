<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel4Movimentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('movimentacao', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_movimentacao')->comment('Campo auto-incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_movimentacao', 50)->comment('Nome da Movimentação');
            $table->enum('ic_tipo_movimentacao', ['debito', 'credito'])->comment('Indicador tipo da movimentacao');
            $table->date('dt_movimentacao')->comment('Data da Movimentação');
            $table->integer('cd_nf_movimentacao')->comment('Codigo nota fiscal da movimentacao');
            $table->dateTime('dt_registro_movimentacao')->comment('Data do registro da movimentacao');
            $table->enum('ic_pago_sim_nao', ['sim', 'nao'])->comment('Indicador movimentacao paga, sim-nao');
            $table->float('vl_movimentacao', 8,2)->comment('Vslor da movimentacao');
            $table->string('ds_movimentacao',200)->nullable()->comment('Descrição da movimentacao');
            $table->enum('ic_recorrente_sim_nao', ['sim', 'nao'])->comment('Indicador movimentacao recorrente, sim-nao');
            
            // Chaves estrangeiras
            $table->integer('cd_conta')->unsigned()->comment('Campo auto-incremento,não nulo,maior que zero,chave estrangeira, Tabela:Conta/cd_conta');
            $table->foreign('cd_conta')->references('cd_conta')->on('conta');
            $table->integer('cd_contrato')->unsigned()->nullable()->comment('Campo auto-incremento,não nulo,maior que zero,chave estrangeira, Tabela:Contrato/cd_contrato');
            $table->foreign('cd_contrato')->references('cd_contrato')->on('contrato');
            
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
        Schema::dropIfExists('movimentacao');
        Schema::enableForeignKeyConstraints();
    }
}
