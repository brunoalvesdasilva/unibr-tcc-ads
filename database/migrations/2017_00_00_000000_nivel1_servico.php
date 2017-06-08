<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Servico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('servico', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_servico')->comment('Campo auto-incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_servico', 50)->comment('Nome do Serviço');
            $table->string('ds_servico',200)->comment('Descrição do Serviço');
            $table->float('vl_servico', 8,2)->comment('Valor do Serviço');

            // Default
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('servico');
        Schema::enableForeignKeyConstraints();
    }
}
