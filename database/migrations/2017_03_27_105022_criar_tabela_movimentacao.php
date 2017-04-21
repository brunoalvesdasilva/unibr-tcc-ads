<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMovimentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacao', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_movimentacao');
            $table->string('nm_movimentacao', 50);
			$table->enum('ic_tipo_movimentacao', ['debito', 'credito']);
			$table->date('dt_movimentacao');
			$table->integer('cd_nf');
            $table->dateTime('dt_registro');          
            $table->enum('ic_situacao_movimentacao', ['pago', 'naopago']);
            $table->float('vl_movimentacao', 8,2);
			$table->string('ds_movimentacao',200);
            $table->boolean('ic_recorrente',['sim','nao']);
            
            // Chaves estrangeiras
			$table->integer('cd_conta')->unsigned();
            $table->foreign('fk_conta_movimentacao')->references('cd_conta')->on('conta');
            $table->integer('cd_contrato')->unsigned();
            $table->foreign('fk_contrato_movimentacao')->references('cd_contrato')->on('contrato');
            
            $table->rememberToken();
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
        Schema::dropIfExists('movimentacao');
    }
}
