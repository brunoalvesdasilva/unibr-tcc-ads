<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaContrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_contrato');
            $table->double('vl_contrato');
            $table->integer('cd_parcela_atual');
            $table->integer('cd_parcela_total');
			$table->ENUM('ic_tipo_compra_venda', ['compra','venda']);
            $table->integer('cd_fornecedor')->unsigned();
            $table->foreign('fk_fornecedor_contrato')->references('cd_fornecedor')->on('fornecedor');
            $table->integer('cd_cliente')->unsigned();
            $table->foreign('fk_cliente_contrato')->references('cd_cliente')->on('cliente');
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
        Schema::dropIfExists('contrato');
    }
}
