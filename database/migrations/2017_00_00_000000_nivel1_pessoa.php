<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Pessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pessoa', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_pessoa');
            $table->string('nm_pessoa', 50);
            $table->enum('nm_tipo_pessoa',['juridica','fisica']);
            $table->enum('nm_cliente_pessoa',['sim','nao']);
            $table->enum('nm_fornecedor_pessoa',['sim','nao']);
            
            // Defaults
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
        Schema::dropIfExists('pessoa');
    }
}
