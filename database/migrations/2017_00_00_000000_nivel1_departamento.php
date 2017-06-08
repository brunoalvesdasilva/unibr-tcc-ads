<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Departamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('departamento', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_departamento')->comment('Campo auto-incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_departamento', 50)->comment('Nome do Departamento');
            
            // default
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
        Schema::dropIfExists('departamento');
        Schema::enableForeignKeyConstraints();
    }
}
