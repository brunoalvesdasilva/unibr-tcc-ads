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
            $table->foreign('cd_conta')->references('cd_conta')->on('conta');
            $table->integer('cd_contrato')->unsigned();
            $table->foreign('cd_contrato')->references('cd_contrato')->on('contrato');
            
            // Defaults
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('movimentacao');
    }
}
