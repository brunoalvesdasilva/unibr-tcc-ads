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
            $table->string('ds_movimentacao', 150);
            $table->float('vl_movimentacao', 8, 2);
            $table->date('dt_movimentacao');
            $table->enum('ic_tipo_debito_credito', ['debito', 'credito']);
            $table->enum('ic_situacao_pago_naopago', ['pago', 'naopago']);
            $table->dateTime('dt_registro');
            
            
            // Chaves estrangeiras
            $table->integer('cd_departamento')->unsigned();
            $table->foreign('cd_departamento')->references('cd_departamento')->on('departamento');
            
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
