<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Contato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
            Schema::create('contato', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_contato')->comment('Campo auto incremento, não nulo, maior que zero,chave primaria');
            $table->string('nm_contato', 50)->comment('Nome de quem entrou em contato');
            $table->string('nm_email_contato',200)->comment('E-mail de quem entrou em contato');
            $table->longText('ds_contato')->comment('Mensagem de quem entrou em contato');
            $table->dateTime('dt_contato')->comment('Data do registro do contato');
            
            // Default
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
        Schema::dropIfExists('contato');
        Schema::enableForeignKeyConstraints();
    }
}
