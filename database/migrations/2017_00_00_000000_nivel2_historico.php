<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel2Historico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('historico', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_historico')->comment('Campo auto incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_status', 50)->comment('Nome status historico');
            $table->date('dt_historico')->comment('Data historico');
            
            // Chaves estrangeiras
            $table->integer('cd_contrato')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Contrato/cd_contrato');
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
        Schema::dropIfExists('historico');
        Schema::enableForeignKeyConstraints();
    }
}
