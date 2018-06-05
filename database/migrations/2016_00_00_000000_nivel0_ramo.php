<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel0Ramo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('ramo', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_ramo')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('nm_ramo_empresa', 100)->comment('Nome ramo da empresa');
            
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
        Schema::dropIfExists('ramo');
        Schema::enableForeignKeyConstraints();
    }
}

